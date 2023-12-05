<style>
/* logo */
body {
    overflow: hidden;
}

.load_home_page {
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100vh;
    background: #00603c;
    transition: 1s;
}

.load_home_page svg {
    max-width: 100%;
    position: absolute;
    width: 30%;
    height: 30%;
    z-index: 99;
    left: 62%;
    top: 50%;
    transform: translate(-50%, -50%);
    -webkit-transition: all 0.8s ease-in-out;
    -moz-transition: all 0.8s ease-in-out;
    -ms-transition: all 0.8s ease-in-out;
    -o-transition: all 0.8s ease-in-out;
    transition: all 0.8s ease-in-out;
}

.load_home_page svg path {
    stroke: #FFFFFF;
    stroke-width: 4px;
    stroke-dasharray: 9999;
    stroke-dashoffset: 9999;
    fill: transparent;
    transition: all 1s ease-in-out;
}


div.load_home_page .mask {
    background-color: #000;
    transition: 1s all ease-in-out;
    position: absolute;
    width: 100%;
    height: 100%;
}

.load_home_page.hidden .mask {
    background-color: transparent;
}

.load_home_page.hidden {
    visibility: hidden;
}

.load_home_page.hidden .mask span {
    width: 0;
    opacity: 0;
    transition-delay: 0.5s;
}


.load_home_page svg path.str1 {
    animation-name: Signature;
    animation-duration: 30s;
    animation-fill-mode: forwards;
    animation-timing-function: cubic-bezier(2, .25, .43, .96);
}

.load_home_page.hidden svg {
    transition-delay: 0.5s;
    opacity: 0;
}

.load_home_page.hidden path {
    fill: #FFFFFF;
}

@media only screen and (max-width: 1199px) {
    .load_home_page svg {
        width: 17rem;
    }
}

@media only screen and (max-width: 991px) {
    .load_home_page svg {
        width: 12rem;
    }

    .load_home_page svg path {
        stroke: #FFFFFF;
        stroke-width: 6px;
    }

}

@keyframes Signature {
    to {
        stroke: #FFF;
        stroke-dashoffset: 0;
    }
}

.load_home_page img {
    height: 250px;
    margin-left: 30%;
    margin-right: 30%;
}

</style>
<div class="load_home_page flex items-center">
    <img src="./image/gt-removebg-preview.png" alt="">
    <svg viewBox="0 0 550 81.843" xmlns="http://www.w3.org/2000/svg">
        <g id="svgGroup" stroke-linecap="round" fill-rule="nonzero" font-size="9pt" stroke="#fff" stroke-width="0,2"
            fill="none" style="stroke:#000;stroke-width:1;fill:none">
            <path class="str1"
                d="M 6.121 81.148 A 11.258 11.258 0 0 1 5.518 80.973 Q 4.069 80.509 3.107 78.852 A 7.505 7.505 0 0 1 2.976 78.617 A 6.652 6.652 0 0 1 2.443 77.222 Q 2.05 75.768 1.994 73.641 A 27.609 27.609 0 0 1 1.984 72.913 A 44.932 44.932 0 0 1 2.05 70.584 Q 2.113 69.378 2.236 67.992 A 106.917 106.917 0 0 1 2.542 65.039 Q 3.1 60.265 3.968 54.809 A 177.098 177.098 0 0 0 5.076 46.279 A 204.811 204.811 0 0 0 5.394 43.029 Q 5.952 36.829 5.952 30.505 Q 5.952 28.025 5.828 25.173 Q 5.704 22.321 5.332 19.593 Q 4.464 20.089 3.658 20.399 Q 2.852 20.709 2.108 20.709 A 1.703 1.703 0 0 1 0.503 19.637 Q 0.112 18.843 0.025 17.458 A 13.444 13.444 0 0 1 0 16.617 A 13.718 13.718 0 0 1 0.287 13.738 A 9.838 9.838 0 0 1 1.674 10.355 A 9.787 9.787 0 0 1 3.155 8.629 Q 4.771 7.108 7.44 5.657 A 33.712 33.712 0 0 1 7.812 5.457 Q 12.084 3.138 17.859 1.6 A 62.88 62.88 0 0 1 18.042 1.551 Q 23.932 0.001 30.008 0.001 Q 42.036 0.001 49.29 6.325 A 20.798 20.798 0 0 1 56.469 21.092 A 28.862 28.862 0 0 1 56.544 23.189 A 27.893 27.893 0 0 1 55.018 32.481 A 26.107 26.107 0 0 1 53.94 35.093 Q 51.336 40.549 47.058 44.579 A 32.853 32.853 0 0 1 39.92 49.741 A 30.074 30.074 0 0 1 37.758 50.779 A 26.998 26.998 0 0 1 32.167 52.534 A 22.468 22.468 0 0 1 27.9 52.949 Q 24.001 52.949 22.251 51.471 A 3.913 3.913 0 0 1 21.7 50.903 A 6.724 6.724 0 0 1 20.598 48.769 Q 20.088 47.175 20.088 45.013 A 13.914 13.914 0 0 1 20.226 43.019 A 11.199 11.199 0 0 1 20.522 41.603 A 2.716 2.716 0 0 1 20.827 40.889 Q 21.306 40.125 22.261 40.059 A 2.675 2.675 0 0 1 22.444 40.053 Q 22.816 40.053 23.56 40.177 Q 24.304 40.301 25.048 40.549 Q 25.618 40.644 26.551 40.812 A 293.678 293.678 0 0 1 27.156 40.921 A 14.679 14.679 0 0 0 28.589 41.105 Q 29.375 41.169 30.256 41.169 Q 37.076 41.169 41.354 37.325 Q 45.632 33.481 45.632 27.405 A 13.615 13.615 0 0 0 44.913 22.881 A 11.461 11.461 0 0 0 40.92 17.485 A 16.921 16.921 0 0 0 34.388 14.488 Q 31.805 13.889 28.768 13.889 A 36.966 36.966 0 0 0 23.366 14.296 A 40.417 40.417 0 0 0 23.188 14.323 Q 20.336 14.757 17.484 15.501 Q 17.112 23.685 15.748 34.101 Q 15.004 40.301 14.446 46.315 Q 13.888 52.329 13.888 57.289 Q 13.888 61.171 14.533 64.21 A 23.026 23.026 0 0 0 14.694 64.915 Q 15.5 68.201 17.98 70.557 A 6.929 6.929 0 0 1 18.986 71.808 A 4.631 4.631 0 0 1 19.716 74.277 A 4.935 4.935 0 0 1 18.742 77.18 Q 18.217 77.92 17.409 78.615 A 11.693 11.693 0 0 1 16.616 79.237 Q 13.782 81.278 9.393 81.453 A 21.011 21.011 0 0 1 8.556 81.469 A 9.667 9.667 0 0 1 6.121 81.148 Z"
                id="0" vector-effect="non-scaling-stroke" />
            <path class="str1"
                d="M 73.97 81.469 Q 70.292 81.453 68.2 79.423 A 5.848 5.848 0 0 1 66.875 77.38 Q 66.149 75.58 66.096 72.85 A 22.447 22.447 0 0 1 66.092 72.417 Q 66.092 69.565 66.65 66.837 Q 67.208 64.109 67.952 61.505 Q 68.82 58.777 69.378 55.925 A 30.256 30.256 0 0 0 69.892 51.633 A 35.507 35.507 0 0 0 69.936 49.849 Q 69.936 47.617 69.316 45.571 A 4.733 4.733 0 0 0 66.97 42.728 A 6.487 6.487 0 0 0 66.588 42.533 Q 64.976 41.665 63.798 40.735 Q 62.63 39.813 62.62 38.342 A 3.74 3.74 0 0 1 62.62 38.317 A 4.374 4.374 0 0 1 62.929 36.751 Q 63.164 36.135 63.58 35.491 A 10.147 10.147 0 0 1 64.232 34.597 A 12.505 12.505 0 0 1 66.588 32.386 A 16.319 16.319 0 0 1 68.51 31.187 A 11.789 11.789 0 0 1 72.702 29.839 A 11.217 11.217 0 0 1 74.028 29.761 A 9.412 9.412 0 0 1 75.701 29.899 Q 76.595 30.061 77.292 30.412 A 4.16 4.16 0 0 1 78.554 31.373 A 7.879 7.879 0 0 1 80.025 33.863 A 10.386 10.386 0 0 1 80.476 35.465 Q 80.972 37.945 80.972 40.549 Q 80.972 44.517 80.352 48.299 Q 79.732 52.081 79.112 55.305 Q 78.616 57.661 78.368 59.645 A 32.789 32.789 0 0 0 78.161 61.914 A 26.513 26.513 0 0 0 78.12 63.365 A 10.284 10.284 0 0 0 78.258 65.11 Q 78.42 66.045 78.769 66.784 A 4.608 4.608 0 0 0 79.608 68.015 A 11.148 11.148 0 0 0 81.022 69.244 Q 82.205 70.119 83.824 70.929 Q 84.94 71.549 84.94 72.789 Q 84.94 73.542 84.369 74.938 A 20.39 20.39 0 0 1 83.948 75.889 A 8.559 8.559 0 0 1 82.505 78.009 Q 81.785 78.799 80.821 79.525 A 15.196 15.196 0 0 1 80.538 79.733 Q 78.12 81.469 74.028 81.469 A 13.467 13.467 0 0 1 73.97 81.469 Z M 71.406 18.222 A 7.424 7.424 0 0 1 68.324 16.493 A 6.471 6.471 0 0 1 66.465 13.195 A 9.84 9.84 0 0 1 66.216 10.913 A 10.085 10.085 0 0 1 66.767 7.848 A 8.283 8.283 0 0 1 68.82 4.651 A 8.02 8.02 0 0 1 74.055 2.375 Q 74.408 2.351 74.772 2.351 A 11.531 11.531 0 0 1 75.144 2.357 A 10.95 10.95 0 0 1 77.517 2.683 Q 79.136 3.103 80.315 4.049 A 6.683 6.683 0 0 1 80.786 4.465 A 6.161 6.161 0 0 1 82.508 7.626 Q 82.715 8.555 82.715 9.639 A 11.773 11.773 0 0 1 82.708 10.045 A 10.033 10.033 0 0 1 82.138 13.149 A 8.416 8.416 0 0 1 80.228 16.183 A 7.849 7.849 0 0 1 75.815 18.445 A 11.236 11.236 0 0 1 73.904 18.601 A 10.321 10.321 0 0 1 71.406 18.222 Z"
                id="1" vector-effect="non-scaling-stroke" />
            <path class="str1"
                d="M 102.548 59.893 L 119.04 48.485 Q 121.669 46.441 122.234 45.314 A 1.252 1.252 0 0 0 122.388 44.765 A 1.897 1.897 0 0 0 121.353 43.109 Q 119.613 42.037 114.948 42.037 A 34.139 34.139 0 0 0 111.907 42.164 Q 109.012 42.424 107.012 43.215 Q 104.036 44.393 102.92 46.005 A 15.291 15.291 0 0 1 102.473 46.505 Q 102.017 46.992 101.643 47.288 A 4.454 4.454 0 0 1 101.618 47.307 A 1.887 1.887 0 0 1 101 47.619 Q 100.734 47.699 100.416 47.727 A 4.023 4.023 0 0 1 100.068 47.741 Q 98.637 47.741 97.17 46.53 A 9.614 9.614 0 0 1 96.286 45.695 A 6.862 6.862 0 0 1 94.612 42.488 A 10.161 10.161 0 0 1 94.364 40.177 A 8.62 8.62 0 0 1 94.8 37.37 A 7.105 7.105 0 0 1 97.464 33.853 Q 100.152 31.918 104.285 30.961 A 30.003 30.003 0 0 1 105.586 30.691 A 55.908 55.908 0 0 1 112.814 29.852 A 66.193 66.193 0 0 1 116.312 29.761 A 95.324 95.324 0 0 1 120.709 29.857 Q 122.868 29.957 124.752 30.161 A 47.597 47.597 0 0 1 126.914 30.443 A 25.295 25.295 0 0 1 129.98 31.103 Q 132.339 31.776 134.044 32.861 Q 136.152 34.101 137.206 36.333 Q 138.26 38.565 138.26 41.045 A 8.699 8.699 0 0 1 136.869 45.693 Q 136.083 46.96 134.852 48.176 A 18.611 18.611 0 0 1 133.982 48.981 Q 131.108 51.48 126.75 54.372 A 134.897 134.897 0 0 1 122.14 57.289 L 108.252 65.721 Q 107.012 66.465 107.012 67.457 A 1.528 1.528 0 0 0 107.15 68.126 Q 107.451 68.753 108.413 68.907 A 3.851 3.851 0 0 0 108.748 68.945 A 32.558 32.558 0 0 0 109.742 69.028 Q 110.671 69.092 111.848 69.131 Q 113.708 69.193 115.94 69.193 A 62.564 62.564 0 0 0 121.782 68.939 Q 127.531 68.398 131.307 66.707 A 18.151 18.151 0 0 0 131.564 66.589 A 22.212 22.212 0 0 1 132.427 66.154 Q 133.862 65.473 134.54 65.473 A 2.464 2.464 0 0 1 135.785 65.829 Q 136.504 66.245 137.206 67.147 A 6.01 6.01 0 0 1 138.325 69.603 A 8.605 8.605 0 0 1 138.508 71.425 A 8.122 8.122 0 0 1 137.659 75.207 Q 136.146 78.135 131.936 79.485 Q 127.338 80.96 120.736 81.403 A 90.378 90.378 0 0 1 114.7 81.593 Q 110.36 81.593 106.888 81.345 A 66.492 66.492 0 0 1 104.016 81.081 Q 102.712 80.93 101.562 80.736 A 36.883 36.883 0 0 1 100.812 80.601 A 22.853 22.853 0 0 1 98.988 80.196 Q 98.141 79.97 97.431 79.694 A 10.344 10.344 0 0 1 96.41 79.237 Q 94.854 78.43 93.887 77.409 A 6.74 6.74 0 0 1 93.744 77.253 A 5.346 5.346 0 0 1 93.141 76.375 Q 92.895 75.934 92.686 75.401 A 10.466 10.466 0 0 1 92.504 74.897 Q 92.043 73.514 92.011 72.345 A 6.333 6.333 0 0 1 92.008 72.169 A 8.408 8.408 0 0 1 94.696 65.907 A 11.117 11.117 0 0 1 95.17 65.473 Q 98.332 62.745 102.548 59.893 Z"
                id="2" vector-effect="non-scaling-stroke" />
            <path class="str1"
                d="M 156.364 59.893 L 172.856 48.485 Q 175.485 46.441 176.05 45.314 A 1.252 1.252 0 0 0 176.204 44.765 A 1.897 1.897 0 0 0 175.169 43.109 Q 173.429 42.037 168.764 42.037 A 34.139 34.139 0 0 0 165.723 42.164 Q 162.828 42.424 160.828 43.215 Q 157.852 44.393 156.736 46.005 A 15.291 15.291 0 0 1 156.289 46.505 Q 155.833 46.992 155.459 47.288 A 4.454 4.454 0 0 1 155.434 47.307 A 1.887 1.887 0 0 1 154.816 47.619 Q 154.55 47.699 154.232 47.727 A 4.023 4.023 0 0 1 153.884 47.741 Q 152.453 47.741 150.986 46.53 A 9.614 9.614 0 0 1 150.102 45.695 A 6.862 6.862 0 0 1 148.428 42.488 A 10.161 10.161 0 0 1 148.18 40.177 A 8.62 8.62 0 0 1 148.616 37.37 A 7.105 7.105 0 0 1 151.28 33.853 Q 153.968 31.918 158.101 30.961 A 30.003 30.003 0 0 1 159.402 30.691 A 55.908 55.908 0 0 1 166.63 29.852 A 66.193 66.193 0 0 1 170.128 29.761 A 95.324 95.324 0 0 1 174.525 29.857 Q 176.684 29.957 178.568 30.161 A 47.597 47.597 0 0 1 180.73 30.443 A 25.295 25.295 0 0 1 183.796 31.103 Q 186.155 31.776 187.86 32.861 Q 189.968 34.101 191.022 36.333 Q 192.076 38.565 192.076 41.045 A 8.699 8.699 0 0 1 190.685 45.693 Q 189.899 46.96 188.668 48.176 A 18.611 18.611 0 0 1 187.798 48.981 Q 184.924 51.48 180.566 54.372 A 134.897 134.897 0 0 1 175.956 57.289 L 162.068 65.721 Q 160.828 66.465 160.828 67.457 A 1.528 1.528 0 0 0 160.966 68.126 Q 161.267 68.753 162.229 68.907 A 3.851 3.851 0 0 0 162.564 68.945 A 32.558 32.558 0 0 0 163.558 69.028 Q 164.487 69.092 165.664 69.131 Q 167.524 69.193 169.756 69.193 A 62.564 62.564 0 0 0 175.598 68.939 Q 181.347 68.398 185.123 66.707 A 18.151 18.151 0 0 0 185.38 66.589 A 22.212 22.212 0 0 1 186.243 66.154 Q 187.678 65.473 188.356 65.473 A 2.464 2.464 0 0 1 189.601 65.829 Q 190.32 66.245 191.022 67.147 A 6.01 6.01 0 0 1 192.141 69.603 A 8.605 8.605 0 0 1 192.324 71.425 A 8.122 8.122 0 0 1 191.475 75.207 Q 189.962 78.135 185.752 79.485 Q 181.154 80.96 174.552 81.403 A 90.378 90.378 0 0 1 168.516 81.593 Q 164.176 81.593 160.704 81.345 A 66.492 66.492 0 0 1 157.832 81.081 Q 156.528 80.93 155.378 80.736 A 36.883 36.883 0 0 1 154.628 80.601 A 22.853 22.853 0 0 1 152.804 80.196 Q 151.957 79.97 151.247 79.694 A 10.344 10.344 0 0 1 150.226 79.237 Q 148.67 78.43 147.703 77.409 A 6.74 6.74 0 0 1 147.56 77.253 A 5.346 5.346 0 0 1 146.957 76.375 Q 146.711 75.934 146.502 75.401 A 10.466 10.466 0 0 1 146.32 74.897 Q 145.859 73.514 145.827 72.345 A 6.333 6.333 0 0 1 145.824 72.169 A 8.408 8.408 0 0 1 148.512 65.907 A 11.117 11.117 0 0 1 148.986 65.473 Q 152.148 62.745 156.364 59.893 Z"
                id="3" vector-effect="non-scaling-stroke" />
            <path class="str1"
                d="M 211.26 81.131 A 14.75 14.75 0 0 1 204.662 77.191 Q 200.649 73.068 200.194 65.776 A 30.78 30.78 0 0 1 200.136 63.861 A 33.206 33.206 0 0 1 202.261 52.29 A 37.863 37.863 0 0 1 202.554 51.523 Q 204.972 45.385 209.56 40.425 Q 214.148 35.465 220.596 32.489 A 32.367 32.367 0 0 1 230.639 29.755 A 40.23 40.23 0 0 1 235.104 29.513 A 36.582 36.582 0 0 1 240.791 29.933 Q 244.685 30.546 247.814 32.055 Q 250.941 33.563 252.213 35.705 A 6.213 6.213 0 0 1 253.084 38.937 A 13.202 13.202 0 0 1 253.06 39.701 Q 253.007 40.615 252.836 41.851 A 25.135 25.135 0 0 1 252.651 43.007 Q 252.46 44.033 252.216 44.765 Q 251.844 45.757 251.162 46.563 A 2.209 2.209 0 0 1 249.544 47.364 A 2.949 2.949 0 0 1 249.364 47.369 Q 248.868 47.369 247.504 46.997 Q 247.008 49.601 246.76 52.081 Q 246.512 54.561 246.512 57.041 Q 246.512 61.753 247.938 65.411 A 6.89 6.89 0 0 0 252.206 69.554 A 9.918 9.918 0 0 0 253.58 69.937 A 6.477 6.477 0 0 1 254.356 70.158 Q 254.757 70.301 255.08 70.488 A 3.376 3.376 0 0 1 255.378 70.681 Q 255.975 71.115 256.049 72.401 A 6.674 6.674 0 0 1 256.06 72.789 A 7.199 7.199 0 0 1 255.98 73.815 Q 255.827 74.869 255.385 76.239 A 23.19 23.19 0 0 1 255.378 76.261 A 7.943 7.943 0 0 1 253.782 79.039 A 10.246 10.246 0 0 1 252.774 80.043 Q 251.193 81.42 248.478 81.664 A 13.654 13.654 0 0 1 247.256 81.717 A 10.573 10.573 0 0 1 244.069 81.261 A 8.261 8.261 0 0 1 239.816 78.183 A 11.841 11.841 0 0 1 238.083 74.66 Q 237.212 71.876 237.212 68.077 A 31.716 31.716 0 0 1 231.615 75.518 A 28.821 28.821 0 0 1 228.718 77.997 A 19.349 19.349 0 0 1 217.914 81.807 A 24.214 24.214 0 0 1 216.628 81.841 A 19.321 19.321 0 0 1 211.26 81.131 Z M 220.596 68.945 Q 225.556 68.945 229.338 65.845 A 20.993 20.993 0 0 0 235.162 58.18 A 24.284 24.284 0 0 0 235.228 58.033 A 29.684 29.684 0 0 0 236.926 53.255 A 34.636 34.636 0 0 0 237.336 51.523 Q 238.08 47.989 238.328 44.517 A 20.954 20.954 0 0 0 235.799 43.531 A 27.626 27.626 0 0 0 233.492 42.905 A 25.505 25.505 0 0 0 228.171 42.288 A 28.342 28.342 0 0 0 227.788 42.285 A 20.989 20.989 0 0 0 221.906 43.072 A 16.46 16.46 0 0 0 215.326 46.749 A 14.398 14.398 0 0 0 210.443 57.183 A 17.825 17.825 0 0 0 210.428 57.909 A 14.687 14.687 0 0 0 210.812 61.359 A 10.298 10.298 0 0 0 213.156 65.907 A 8.977 8.977 0 0 0 218.697 68.81 A 12.864 12.864 0 0 0 220.596 68.945 Z"
                id="4" vector-effect="non-scaling-stroke" />
            <path class="str1"
                d="M 312.069 81.139 A 30.78 30.78 0 0 1 308.078 80.043 A 24.836 24.836 0 0 1 303.967 78.197 A 18.155 18.155 0 0 1 299.832 75.021 Q 296.732 71.797 296.732 67.457 A 10.112 10.112 0 0 1 297.117 64.619 A 8.599 8.599 0 0 1 298.096 62.435 A 5.187 5.187 0 0 1 299.151 61.2 A 4.024 4.024 0 0 1 301.816 60.265 A 4.491 4.491 0 0 1 303.384 60.562 Q 304.135 60.84 304.916 61.381 Q 308.016 64.109 312.914 66.155 Q 317.812 68.201 323.392 68.201 A 30.141 30.141 0 0 0 328.406 67.808 Q 332.416 67.131 335.358 65.287 A 11.269 11.269 0 0 0 337.958 63.098 A 8.45 8.45 0 0 0 340.008 57.413 Q 340.008 52.701 335.668 50.593 A 36.246 36.246 0 0 0 332.629 49.3 Q 329.172 47.996 324.335 46.795 A 118.355 118.355 0 0 0 323.64 46.625 Q 317.936 45.261 312.666 43.153 A 24.741 24.741 0 0 1 307.194 40.156 A 21.121 21.121 0 0 1 303.986 37.263 Q 300.576 33.481 300.576 27.157 A 23.226 23.226 0 0 1 302.19 18.741 A 27.121 27.121 0 0 1 302.684 17.547 A 27.069 27.069 0 0 1 307.42 10.321 A 31.822 31.822 0 0 1 308.884 8.805 A 30.177 30.177 0 0 1 316.253 3.594 A 36.035 36.035 0 0 1 318.804 2.419 A 31.482 31.482 0 0 1 327.068 0.29 A 40 40 0 0 1 331.948 0.001 A 41.744 41.744 0 0 1 337.792 0.393 A 33.287 33.287 0 0 1 341.93 1.241 A 25.311 25.311 0 0 1 345.063 2.311 Q 347.456 3.318 349.122 4.713 A 7.891 7.891 0 0 1 350.848 6.69 A 6.626 6.626 0 0 1 351.788 10.169 A 7.603 7.603 0 0 1 351.357 12.763 A 6.881 6.881 0 0 1 350.424 14.509 A 10.609 10.609 0 0 1 348.221 16.756 A 9.666 9.666 0 0 1 347.2 17.423 A 10.991 10.991 0 0 1 346.086 17.979 Q 344.914 18.477 343.976 18.477 A 3.821 3.821 0 0 1 343.14 18.373 Q 342.327 18.19 341.26 17.68 A 17.255 17.255 0 0 1 340.628 17.361 A 31.417 31.417 0 0 0 335.473 15.184 A 37.436 37.436 0 0 0 332.878 14.447 A 42.636 42.636 0 0 0 329.818 13.805 Q 327.391 13.393 325.376 13.393 A 22.696 22.696 0 0 0 321.305 13.737 Q 318.94 14.169 317.04 15.141 A 12.601 12.601 0 0 0 315.518 16.059 Q 312.796 17.978 312.033 20.379 A 6.375 6.375 0 0 0 311.736 22.321 Q 311.736 26.289 316.51 28.955 Q 321.245 31.599 333.482 34.548 A 218.621 218.621 0 0 0 333.684 34.597 Q 342.116 36.829 346.828 40.735 Q 351.54 44.641 351.54 53.073 Q 351.54 60.637 347.51 67.209 A 29.635 29.635 0 0 1 337.56 77.032 A 35.419 35.419 0 0 1 336.226 77.811 A 31.742 31.742 0 0 1 325.387 81.407 A 41.299 41.299 0 0 1 319.3 81.841 A 36.03 36.03 0 0 1 312.069 81.139 Z"
                id="6" vector-effect="non-scaling-stroke" />
            <path class="str1"
                d="M 366.978 76.819 A 18.95 18.95 0 0 1 364.488 70.967 Q 363.692 67.767 363.692 63.861 Q 363.692 61.009 364.002 58.281 Q 364.312 55.553 364.684 52.825 Q 365.056 50.097 365.428 47.493 A 142.095 142.095 0 0 0 365.881 44.03 A 121.319 121.319 0 0 0 366.048 42.533 Q 363.444 43.277 360.84 43.277 A 4.869 4.869 0 0 1 359.828 43.181 Q 358.112 42.815 358.112 41.045 Q 358.112 38.689 360.22 35.279 A 39.122 39.122 0 0 1 363.267 31.041 A 48.3 48.3 0 0 1 365.49 28.521 A 51.024 51.024 0 0 1 368.998 25.131 A 39.836 39.836 0 0 1 371.814 22.879 Q 374.67 20.807 376.767 20.607 A 4.63 4.63 0 0 1 377.208 20.585 A 2.25 2.25 0 0 1 379.357 21.954 Q 379.857 22.965 379.925 24.722 A 14.792 14.792 0 0 1 379.936 25.297 A 17.865 17.865 0 0 1 379.773 27.676 A 19.598 19.598 0 0 1 379.75 27.839 Q 379.564 29.141 379.316 30.505 Q 381.672 30.009 384.09 29.637 Q 386.508 29.265 388.74 29.265 A 13.197 13.197 0 0 1 390.396 29.362 Q 392.077 29.575 393.142 30.257 A 2.99 2.99 0 0 1 394.293 31.684 Q 394.692 32.653 394.692 34.101 A 13.183 13.183 0 0 1 393.822 38.751 A 15.971 15.971 0 0 1 393.266 40.053 Q 391.84 43.029 390.104 43.029 A 3.534 3.534 0 0 1 389.887 43.021 Q 389.515 42.998 388.864 42.905 A 27.774 27.774 0 0 1 388.161 42.795 Q 387.846 42.741 387.495 42.676 A 56.691 56.691 0 0 1 386.756 42.533 Q 385.661 42.28 384.164 42.027 A 82.424 82.424 0 0 0 382.664 41.789 A 30.377 30.377 0 0 0 380.486 41.548 Q 378.774 41.417 376.712 41.417 Q 375.844 45.261 375.162 49.291 A 53.537 53.537 0 0 0 374.696 52.663 Q 374.514 54.408 374.486 55.972 A 31.5 31.5 0 0 0 374.48 56.545 A 22.396 22.396 0 0 0 374.719 59.948 Q 375.384 64.259 377.899 66.209 A 6.758 6.758 0 0 0 378.076 66.341 A 11.981 11.981 0 0 0 381.53 68.027 Q 383.157 68.54 385.139 68.766 A 29.608 29.608 0 0 0 388.492 68.945 Q 390.213 68.945 391.107 69.399 A 2.181 2.181 0 0 1 391.468 69.627 A 1.996 1.996 0 0 1 392.077 70.461 Q 392.215 70.798 392.279 71.224 A 5.484 5.484 0 0 1 392.336 72.045 A 7.386 7.386 0 0 1 390.252 77.186 A 12.073 12.073 0 0 1 388.12 78.989 A 16.326 16.326 0 0 1 381.807 81.5 A 22.268 22.268 0 0 1 377.828 81.841 Q 372.134 81.841 368.864 78.995 A 10.452 10.452 0 0 1 366.978 76.819 Z"
                id="7" vector-effect="non-scaling-stroke" />
            <path class="str1"
                d="M 420.856 81.841 Q 412.3 81.841 407.154 77.191 A 14.823 14.823 0 0 1 402.858 70.117 Q 402.168 67.72 402.038 64.842 A 30.132 30.132 0 0 1 402.008 63.489 Q 402.008 59.273 403.186 55.305 Q 404.364 51.337 406.348 47.865 A 16.475 16.475 0 0 1 405.473 48.378 Q 404.132 49.105 403.372 49.105 Q 402.222 49.105 401.628 48.105 A 3.453 3.453 0 0 1 401.326 47.431 A 10.787 10.787 0 0 1 400.817 45.108 A 9.517 9.517 0 0 1 400.768 44.145 A 11.201 11.201 0 0 1 400.904 42.343 Q 401.169 40.724 401.946 39.619 A 16.752 16.752 0 0 1 402.803 38.498 Q 403.237 37.981 403.662 37.577 A 7.756 7.756 0 0 1 404.24 37.077 A 20.383 20.383 0 0 1 406.145 35.649 Q 408.577 34.017 412.424 32.179 A 26.142 26.142 0 0 1 418.93 30.109 Q 421.824 29.569 425.128 29.518 A 44.921 44.921 0 0 1 425.816 29.513 A 30.67 30.67 0 0 1 432.513 30.2 Q 438.482 31.536 442.37 35.465 A 19.526 19.526 0 0 1 447.362 44.469 Q 448.148 47.485 448.246 51.051 A 37.39 37.39 0 0 1 448.26 52.081 A 34.329 34.329 0 0 1 446.904 61.861 A 30.409 30.409 0 0 1 444.788 67.147 Q 441.316 73.905 435.178 77.873 A 24.75 24.75 0 0 1 424.339 81.651 A 31.223 31.223 0 0 1 420.856 81.841 Z M 424.7 69.193 A 16.288 16.288 0 0 0 430.338 68.247 A 14.536 14.536 0 0 0 435.178 65.287 A 12.93 12.93 0 0 0 439.372 56.696 A 17.935 17.935 0 0 0 439.456 54.933 A 16.157 16.157 0 0 0 439.084 51.34 Q 438.185 47.401 435.116 45.385 A 17.409 17.409 0 0 0 426.821 42.603 A 21.62 21.62 0 0 0 425.072 42.533 Q 422.468 42.533 420.36 43.029 A 28.457 28.457 0 0 0 417.098 43.999 A 25.394 25.394 0 0 0 416.392 44.269 A 30.906 30.906 0 0 0 414.181 47.972 A 36.713 36.713 0 0 0 413.292 49.849 A 16.279 16.279 0 0 0 411.976 55.296 A 19.395 19.395 0 0 0 411.928 56.669 Q 411.928 61.723 414.4 64.759 A 9.743 9.743 0 0 0 415.648 66.031 A 13.229 13.229 0 0 0 423.513 69.152 A 17.108 17.108 0 0 0 424.7 69.193 Z"
                id="8" vector-effect="non-scaling-stroke" />
            <path class="str1"
                d="M 464.006 81.516 Q 463.375 81.432 462.853 81.255 A 4.253 4.253 0 0 1 462.086 80.911 Q 461.041 80.306 461.216 78.968 A 3.703 3.703 0 0 1 461.28 78.617 Q 462.644 73.285 463.574 67.767 A 66.459 66.459 0 0 0 464.431 60.059 A 57.674 57.674 0 0 0 464.504 57.165 Q 464.504 51.974 464.002 48.988 A 15.949 15.949 0 0 0 463.698 47.555 A 15.479 15.479 0 0 0 463.201 45.993 Q 462.602 44.429 461.787 43.584 A 3.918 3.918 0 0 0 461.528 43.339 A 8.621 8.621 0 0 0 459.471 42.033 A 10.886 10.886 0 0 0 458.18 41.541 Q 457.312 41.169 456.63 40.549 A 2.026 2.026 0 0 1 456.008 39.432 A 3.024 3.024 0 0 1 455.948 38.813 Q 455.948 37.446 456.794 35.848 A 11.691 11.691 0 0 1 457.312 34.969 Q 458.676 32.861 461.156 31.311 A 10.234 10.234 0 0 1 465.774 29.807 A 12.668 12.668 0 0 1 466.86 29.761 A 9.527 9.527 0 0 1 469.031 29.992 Q 470.525 30.341 471.556 31.222 A 5.48 5.48 0 0 1 472.75 32.675 A 11.447 11.447 0 0 1 473.895 35.569 Q 474.424 37.651 474.424 40.301 A 27.764 27.764 0 0 1 476.579 36.353 Q 478.094 34.066 479.942 32.427 A 11.475 11.475 0 0 1 486.351 29.62 A 15.389 15.389 0 0 1 488.188 29.513 A 12.445 12.445 0 0 1 490.679 29.749 Q 492.289 30.078 493.556 30.864 A 7.774 7.774 0 0 1 493.768 31.001 A 4.8 4.8 0 0 1 495.804 34.013 A 7.909 7.909 0 0 1 496 35.837 A 10.104 10.104 0 0 1 494.279 41.456 A 12.666 12.666 0 0 1 493.83 42.099 A 11.502 11.502 0 0 1 492.707 43.408 Q 491.085 45.013 489.428 45.013 Q 489.139 45.013 488.775 44.938 A 5.246 5.246 0 0 1 488.56 44.889 A 1.407 1.407 0 0 1 487.964 44.567 A 1.997 1.997 0 0 1 487.692 44.269 Q 486.08 42.285 483.724 42.285 Q 480.831 42.285 478.5 45.335 A 15.635 15.635 0 0 0 477.4 46.997 Q 475.445 50.375 474.764 55.6 A 44.51 44.51 0 0 0 474.424 60.017 Q 474.548 63.117 474.61 66.341 Q 474.67 69.445 474.672 70.939 A 76.282 76.282 0 0 1 474.672 71.053 A 13.599 13.599 0 0 1 474.253 74.515 A 10.222 10.222 0 0 1 472.13 78.617 Q 469.588 81.593 465.248 81.593 A 9.391 9.391 0 0 1 464.006 81.516 Z"
                id="9" vector-effect="non-scaling-stroke" />
            <path class="str1"
                d="M 516.956 81.841 Q 528.364 81.841 536.672 73.905 A 42.261 42.261 0 0 0 536.741 73.84 Q 540.032 70.708 540.991 68.435 A 4.465 4.465 0 0 0 541.384 66.713 Q 541.384 65.473 540.578 64.667 A 2.657 2.657 0 0 0 539.551 64.021 A 3.121 3.121 0 0 0 538.532 63.861 Q 537.486 63.861 536.317 64.597 A 8.601 8.601 0 0 0 535.308 65.349 A 18.846 18.846 0 0 1 532.868 67.038 A 22.727 22.727 0 0 1 528.798 68.883 Q 525.016 70.185 521.42 70.185 Q 515.468 70.185 511.686 66.713 A 11.564 11.564 0 0 1 508.51 61.878 A 14.279 14.279 0 0 1 507.78 57.537 A 15.735 15.735 0 0 0 509.12 58.39 Q 511.603 59.801 514.736 60.414 A 27.069 27.069 0 0 0 519.932 60.885 Q 526.008 60.885 530.968 58.467 A 24.572 24.572 0 0 0 532.47 57.671 A 20.467 20.467 0 0 0 538.904 51.957 Q 541.88 47.865 541.88 43.029 A 15.662 15.662 0 0 0 541.841 41.908 A 11.773 11.773 0 0 0 537.416 33.295 Q 534.557 30.952 530.475 30.109 A 24.561 24.561 0 0 0 525.512 29.637 Q 517.7 29.637 511.19 33.915 Q 504.68 38.193 500.836 45.385 Q 496.992 52.577 496.992 61.381 A 34.352 34.352 0 0 0 497.005 62.334 Q 497.255 71.322 502.262 76.447 Q 507.532 81.841 516.956 81.841 Z M 518.816 52.701 A 17.729 17.729 0 0 0 522.077 52.417 Q 524.443 51.974 526.256 50.841 A 7.978 7.978 0 0 0 527.761 49.649 A 4.898 4.898 0 0 0 529.232 46.129 A 4.442 4.442 0 0 0 528.879 44.329 Q 528.395 43.224 527.248 42.471 A 7.087 7.087 0 0 0 525.309 41.604 Q 524.413 41.346 523.341 41.241 A 15.91 15.91 0 0 0 521.792 41.169 A 14.655 14.655 0 0 0 517.265 41.846 A 12.727 12.727 0 0 0 513.794 43.587 A 12.983 12.983 0 0 0 509.353 49.162 A 16.354 16.354 0 0 0 508.896 50.345 A 10.794 10.794 0 0 0 510.605 51.227 Q 511.482 51.59 512.522 51.872 A 20.682 20.682 0 0 0 513.36 52.081 Q 516.088 52.701 518.816 52.701 Z"
                id="10" vector-effect="non-scaling-stroke" />
        </g>
    </svg>
</div>
<script>
let load_home_page = document.querySelector('.load_home_page');
let body = document.querySelector('body');
window.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        load_home_page.style.top = '-100vh';
        body.style.overflow = 'auto';
    }, 1800)
})
</script>