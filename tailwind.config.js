/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/**/*.php",
    ],

    theme: {
        extend: {
            colors: {
                forest: {
                    DEFAULT: '#2d5a3d',
                    50: '#f0f9f4',
                    100: '#dcfce7',
                    200: '#bbf7d0',
                    300: '#86efac',
                    400: '#4ade80',
                    500: '#22c55e',
                    600: '#16a34a',
                    700: '#15803d',
                    800: '#166534',
                    900: '#14532d',
                    950: '#052e16',
                },
                sage: {
                    DEFAULT: '#5a7d5a',
                    50: '#f6f7f6',
                    100: '#e3e8e3',
                    200: '#c5d1c5',
                    300: '#9db59d',
                    400: '#7a9a7a',
                    500: '#5a7d5a',
                    600: '#4a644a',
                    700: '#3d523d',
                    800: '#334333',
                    900: '#2c3a2c',
                },
                atmosphere: {
                    DEFAULT: '#4a7c8c',
                    50: '#f0f7fa',
                    100: '#d9eef4',
                    200: '#b3ddf0',
                    300: '#86c5e9',
                    400: '#5da8de',
                    500: '#4a7c8c',
                    600: '#3e6a7a',
                    700: '#345968',
                    800: '#2c4a58',
                    900: '#253e4b',
                },
                ivory: {
                    DEFAULT: '#f8f6f3',
                    50: '#fefdfb',
                    100: '#fdfaf7',
                    200: '#fbf5ef',
                    300: '#f8efe6',
                    400: '#f4e9da',
                    500: '#f8f6f3',
                    600: '#d4cfc8',
                    700: '#b3aba3',
                    800: '#958d87',
                    900: '#7b7470',
                },
                earth: {
                    DEFAULT: '#6b5b4f',
                    50: '#f5f3f2',
                    100: '#e8e5e2',
                    200: '#d1ccc6',
                    300: '#b3ada5',
                    400: '#968f87',
                    500: '#6b5b4f',
                    600: '#5a4c42',
                    700: '#4a3e36',
                    800: '#3e342e',
                    900: '#342c27',
                },
            },

            keyframes: {
                marquee: {
                    '0%': { transform: 'translateX(0%)' },
                    '100%': { transform: 'translateX(-100%)' },
                },
                'marquee-reverse': {
                    '0%': { transform: 'translateX(-100%)' },
                    '100%': { transform: 'translateX(0%)' },
                },
            },
            animation: {
                'marquee': 'marquee 20s linear infinite',
                'marquee-reverse': 'marquee-reverse 20s linear infinite',
            },
        },
    },

    plugins: [
        '@tailwindcss/forms',
    ],
}
