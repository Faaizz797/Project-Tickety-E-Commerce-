import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                lg: "50px",
                xl: "100px",
            },
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: "Poppins, sans-serif",
            },
            colors: {
                "dark-indigo": "#2C3E50",    // Midnight blue for depth and elegance
                "primary": "#ECF0F1",        // Soft white for a gentle contrast
                "secondary": "#F39C12",      // Rich gold for a touch of luxury
                "butter-yellow": "#F1C40F",  // Warm yellow for elegance
                "lavender-pink": "#D5DBDB",  // Light grey with a hint of warmth for a subtle touch
                "persian-pink": "#E5E8E8",   // Soft grey for a muted tone
                "iron-grey": "#BDC3C7",      // Light grey for a sleek and elegant look
                "pastel-purple": "#ABB2B9",  // Neutral grey for balance and sophistication
                "bluish-purple": "#34495E",  // Dark blue-grey for a strong neutral
                "smoke-purple": "#7F8C8D"    // Cool grey for added sophistication
            }
            
            ,
        },
    },

    plugins: [forms, typography],
};