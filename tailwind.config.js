/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./build/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        "text-prime": "#18191A",
        "text-second": "#FEB913",
        "button-prime": "#D80000",
        "button-second": "#FEB913",
        "prime":"#18191A"
      },
      fontFamily: {
        pop: ["Poppins"],
      },
    },
  },
  plugins: [],
};
