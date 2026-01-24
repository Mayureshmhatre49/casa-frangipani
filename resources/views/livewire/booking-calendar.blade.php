<div
    wire:poll.5000ms="loadBookings"
    class="bg-white/5 border border-white/10 rounded-2xl p-6 text-sm text-stone-200 backdrop-blur"
>
    <h3 class="text-lg font-medium text-white mb-4">
        Booking Calendar
    </h3>

    {{-- Livewire data --}}
    <script type="application/json" id="bookings-data">
        @json($bookings)
    </script>

    {{-- Protect FullCalendar DOM --}}
    <div wire:ignore id="booking-calendar" class="bg-black/40 rounded-lg p-3">
        <div id="fc-booking-calendar"></div>
    </div>

    {{-- FullCalendar --}}
    <link
        href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css"
        rel="stylesheet"
    >
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

    <script>
        (function () {
            let calendar = null;

            function parseBookings() {
                const script = document.getElementById('bookings-data');
                if (!script) return [];

                try {
                    const data = JSON.parse(script.textContent || '[]');

                    return data.map(b => ({
                        id: b.id,
                        title: b.title ?? `Booking #${b.id}`,
                        start: b.start,
                        end: b.end,
                        extendedProps: {
                            status: b.status,
                            nights: b.nights,
                            total: b.total
                        }
                    }));
                } catch (e) {
                    console.error('Booking JSON error', e);
                    return [];
                }
            }

            function initCalendar() {
                const el = document.getElementById('fc-booking-calendar');
                if (!el || calendar) return;

                calendar = new FullCalendar.Calendar(el, {
                    initialView: 'dayGridMonth',
                    height: 600,
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,dayGridWeek'
                    },
                    events: parseBookings(),

                    eventClassNames(arg) {
                        const status = arg.event.extendedProps.status;

                        if (status === 'confirmed') return ['fc-confirmed'];
                        if (status === 'blocked') return ['fc-blocked'];
                        return ['fc-pending'];
                    },

                    eventDidMount(info) {
                        const total = info.event.extendedProps.total;
                        if (total) {
                            info.el.setAttribute(
                                'title',
                                '₹' + Number(total).toLocaleString()
                            );
                        }
                    }
                });

                calendar.render();
            }

            function refreshEvents() {
                if (!calendar) return;

                calendar.removeAllEvents();
                calendar.addEventSource(parseBookings());
            }

            document.addEventListener('DOMContentLoaded', () => {
                setTimeout(initCalendar, 50);
            });

            document.addEventListener('livewire:load', initCalendar);
            document.addEventListener('livewire:update', refreshEvents);

            window.addEventListener('beforeunload', () => {
                if (calendar) {
                    calendar.destroy();
                    calendar = null;
                }
            });
        })();
    </script>

    {{-- Dark UI Styles --}}
    <style>
        /* Header */
        .fc .fc-toolbar-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #ffffff;
        }

        .fc .fc-button {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #ffffff;
            border-radius: 0.5rem;
            padding: 0.35rem 0.75rem;
        }

        .fc .fc-button:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        .fc .fc-button-primary:not(:disabled).fc-button-active {
            background: #22d1ee;
            color: #003d47;
        }

        /* Grid */
        .fc-theme-standard td,
        .fc-theme-standard th {
            border-color: rgba(255, 255, 255, 0.1);
        }

        .fc-daygrid-day-number {
            color: #e5e7eb;
            font-weight: 500;
        }

        /* Events */
        .fc-event {
            border-radius: 0.5rem;
            padding: 2px 6px;
            font-size: 0.75rem;
            font-weight: 500;
            border: none;
        }

        .fc-confirmed {
            background: linear-gradient(135deg, #16a34a, #22c55e) !important;
            color: #ffffff !important;
        }

        .fc-blocked {
            background: linear-gradient(135deg, #f59e0b, #fbbf24) !important;
            color: #000000 !important;
        }

        .fc-pending {
            background: linear-gradient(135deg, #6b7280, #9ca3af) !important;
            color: #ffffff !important;
        }
    </style>
</div>
