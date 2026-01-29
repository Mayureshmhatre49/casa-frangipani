module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        'cream': '#faf8f6',
        'brown-dark': '#3d2e26',
        'terracotta': '#c87855',
      },
      fontFamily: {
        'heading': ['DM Sans', 'sans-serif'],
        'body': ['Inter', 'sans-serif'],
        'serif': ['Crimson Text', 'serif'],
      },
      borderRadius: {
        '2xl': '1.5rem',
        '3xl': '2rem',
      },
      animation: {
        'cinematic': 'cinematicEntrance 3.5s cubic-bezier(0.22, 1, 0.36, 1) forwards',
        'slide-up': 'slideUpFade 1s ease-out forwards',
        'shimmer': 'shimmerMove 3s ease-in-out infinite',
      },
    },
  },
  plugins: [],
};
