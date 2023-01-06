<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>متاجر الجامعة</title>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <style>
      @import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap');
      body {
        background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
        font-family: "Readex Pro", Times, serif;
      }

      .container {
        max-width: 960px;
      }

      .pricing-header {
        max-width: 700px;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
          {{--<svg xmlns="http://www.w3.org/2000/svg" width="38" height="51" viewBox="0 0 38 51" fill="none">
            <mask id="path-1-inside-1_1_13" fill="white">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M35.7361 21C35.9095 20.0262 36 19.0237 36 18C36 8.61116 28.3888 1 19 1C9.61116 1 2 8.61116 2 18C2 19.0237 2.09048 20.0262 2.26387 21H1.24888C1.0852 20.0244 1 19.0221 1 18C1 8.05887 9.05887 0 19 0C28.9411 0 37 8.05887 37 18C37 19.0221 36.9148 20.0244 36.7511 21H35.7361Z"/>
            </mask>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M35.7361 21C35.9095 20.0262 36 19.0237 36 18C36 8.61116 28.3888 1 19 1C9.61116 1 2 8.61116 2 18C2 19.0237 2.09048 20.0262 2.26387 21H1.24888C1.0852 20.0244 1 19.0221 1 18C1 8.05887 9.05887 0 19 0C28.9411 0 37 8.05887 37 18C37 19.0221 36.9148 20.0244 36.7511 21H35.7361Z" fill="black"/>
            <path d="M35.7361 21L33.7671 20.6494L33.3486 23H35.7361V21ZM2.26387 21V23H4.65142L4.2329 20.6494L2.26387 21ZM1.24888 21L-0.723559 21.3309L-0.443539 23H1.24888V21ZM36.7511 21V23H38.4435L38.7236 21.3309L36.7511 21ZM37.7052 21.3506C37.8991 20.2616 38 19.1417 38 18H34C34 18.9056 33.92 19.7908 33.7671 20.6494L37.7052 21.3506ZM38 18C38 7.50659 29.4934 -1 19 -1V3C27.2843 3 34 9.71573 34 18H38ZM19 -1C8.50659 -1 0 7.50659 0 18H4C4 9.71573 10.7157 3 19 3V-1ZM0 18C0 19.1417 0.100931 20.2616 0.294834 21.3506L4.2329 20.6494C4.08002 19.7908 4 18.9056 4 18H0ZM1.24888 23H2.26387V19H1.24888V23ZM-1 18C-1 19.1335 -0.905509 20.2464 -0.723559 21.3309L3.22131 20.6691C3.0759 19.8024 3 18.9108 3 18H-1ZM19 -2C7.9543 -2 -1 6.9543 -1 18H3C3 9.16344 10.1634 2 19 2V-2ZM39 18C39 6.9543 30.0457 -2 19 -2V2C27.8366 2 35 9.16344 35 18H39ZM38.7236 21.3309C38.9055 20.2464 39 19.1335 39 18H35C35 18.9108 34.9241 19.8024 34.7787 20.6691L38.7236 21.3309ZM35.7361 23H36.7511V19H35.7361V23Z" fill="#63F25E" mask="url(#path-1-inside-1_1_13)"/>
            <path d="M11.38 24.2L7.44 29.88C7.32 30.0667 7.19333 30.2333 7.06 30.38C6.94 30.5133 6.8 30.6533 6.64 30.8V30.84C6.81333 31 6.98 31.1667 7.14 31.34C7.3 31.5 7.43333 31.6667 7.54 31.84L11.66 38H9.4L4.62 30.78L9.2 24.2H11.38ZM3.66 24.2V28.44C3.66 28.8533 3.63333 29.2467 3.58 29.62C3.54 29.9933 3.47333 30.38 3.38 30.78C3.46 31.1533 3.52667 31.5333 3.58 31.92C3.63333 32.3067 3.66 32.6733 3.66 33.02V38H1.68V24.2H3.66ZM5.62 30.04V31.58H2.98V30.04H5.62ZM23.3527 24.2L19.4127 29.88C19.2927 30.0667 19.166 30.2333 19.0327 30.38C18.9127 30.5133 18.7727 30.6533 18.6127 30.8V30.84C18.786 31 18.9527 31.1667 19.1127 31.34C19.2727 31.5 19.406 31.6667 19.5127 31.84L23.6327 38H21.3727L16.5927 30.78L21.1727 24.2H23.3527ZM15.6327 24.2V28.44C15.6327 28.8533 15.606 29.2467 15.5527 29.62C15.5127 29.9933 15.446 30.38 15.3527 30.78C15.4327 31.1533 15.4993 31.5333 15.5527 31.92C15.606 32.3067 15.6327 32.6733 15.6327 33.02V38H13.6527V24.2H15.6327ZM17.5927 30.04V31.58H14.9527V30.04H17.5927ZM35.7653 24.2V32.68C35.7653 34.0267 35.5986 35.1133 35.2653 35.94C34.9453 36.7533 34.4186 37.3467 33.6853 37.72C32.952 38.08 31.972 38.26 30.7453 38.26C29.4653 38.26 28.4453 38.08 27.6853 37.72C26.9253 37.3467 26.372 36.7533 26.0253 35.94C25.692 35.1133 25.5253 34.0267 25.5253 32.68V24.2H27.5253V32.68C27.5253 33.64 27.6186 34.4067 27.8053 34.98C28.0053 35.54 28.332 35.94 28.7853 36.18C29.252 36.4067 29.872 36.52 30.6453 36.52C31.4186 36.52 32.0253 36.4067 32.4653 36.18C32.9186 35.94 33.2453 35.54 33.4453 34.98C33.6586 34.4067 33.7653 33.64 33.7653 32.68V24.2H35.7653Z" fill="#7BF277"/>
            <path d="M4.384 40.576C4.784 40.584 5.196 40.604 5.62 40.636C6.052 40.668 6.48 40.732 6.904 40.828L6.82 41.68C6.476 41.664 6.088 41.652 5.656 41.644C5.232 41.636 4.82 41.632 4.42 41.632C4.14 41.632 3.9 41.64 3.7 41.656C3.5 41.672 3.336 41.716 3.208 41.788C3.08 41.86 2.984 41.976 2.92 42.136C2.864 42.296 2.836 42.516 2.836 42.796C2.836 43.22 2.916 43.52 3.076 43.696C3.236 43.864 3.496 43.992 3.856 44.08L5.524 44.524C6.164 44.684 6.604 44.956 6.844 45.34C7.084 45.716 7.204 46.224 7.204 46.864C7.204 47.344 7.148 47.732 7.036 48.028C6.932 48.324 6.764 48.552 6.532 48.712C6.308 48.872 6.016 48.984 5.656 49.048C5.296 49.112 4.868 49.144 4.372 49.144C4.1 49.144 3.74 49.132 3.292 49.108C2.844 49.084 2.328 49.016 1.744 48.904L1.828 48.028C2.3 48.044 2.684 48.06 2.98 48.076C3.284 48.084 3.544 48.088 3.76 48.088C3.976 48.088 4.192 48.088 4.408 48.088C4.808 48.088 5.124 48.06 5.356 48.004C5.588 47.94 5.752 47.82 5.848 47.644C5.944 47.46 5.992 47.196 5.992 46.852C5.992 46.556 5.956 46.324 5.884 46.156C5.82 45.988 5.712 45.864 5.56 45.784C5.416 45.696 5.228 45.624 4.996 45.568L3.28 45.1C2.68 44.932 2.256 44.66 2.008 44.284C1.76 43.908 1.636 43.408 1.636 42.784C1.636 42.304 1.688 41.916 1.792 41.62C1.904 41.324 2.072 41.104 2.296 40.96C2.52 40.808 2.804 40.708 3.148 40.66C3.492 40.604 3.904 40.576 4.384 40.576ZM11.9009 40.72V49H10.7009V40.72H11.9009ZM14.5409 40.72V41.752H8.07288V40.72H14.5409ZM18.6961 40.564C19.3041 40.564 19.8201 40.636 20.2441 40.78C20.6761 40.924 21.0201 41.16 21.2761 41.488C21.5321 41.816 21.7161 42.256 21.8281 42.808C21.9481 43.36 22.0081 44.044 22.0081 44.86C22.0081 45.668 21.9481 46.352 21.8281 46.912C21.7161 47.464 21.5321 47.904 21.2761 48.232C21.0201 48.56 20.6761 48.796 20.2441 48.94C19.8201 49.084 19.3041 49.156 18.6961 49.156C18.0881 49.156 17.5681 49.084 17.1361 48.94C16.7121 48.796 16.3681 48.56 16.1041 48.232C15.8481 47.904 15.6601 47.464 15.5401 46.912C15.4201 46.352 15.3601 45.668 15.3601 44.86C15.3601 44.044 15.4201 43.36 15.5401 42.808C15.6601 42.256 15.8481 41.816 16.1041 41.488C16.3681 41.16 16.7121 40.924 17.1361 40.78C17.5681 40.636 18.0881 40.564 18.6961 40.564ZM18.6961 41.608C18.1761 41.608 17.7641 41.708 17.4601 41.908C17.1561 42.108 16.9401 42.444 16.8121 42.916C16.6921 43.38 16.6321 44.028 16.6321 44.86C16.6321 45.684 16.6921 46.332 16.8121 46.804C16.9401 47.276 17.1561 47.612 17.4601 47.812C17.7641 48.012 18.1761 48.112 18.6961 48.112C19.2161 48.112 19.6241 48.012 19.9201 47.812C20.2241 47.612 20.4401 47.276 20.5681 46.804C20.6961 46.332 20.7601 45.684 20.7601 44.86C20.7601 44.028 20.6961 43.38 20.5681 42.916C20.4401 42.444 20.2241 42.108 19.9201 41.908C19.6241 41.708 19.2161 41.608 18.6961 41.608ZM26.6506 40.612C27.3066 40.612 27.8346 40.684 28.2346 40.828C28.6426 40.964 28.9386 41.208 29.1226 41.56C29.3066 41.904 29.3986 42.388 29.3986 43.012C29.3986 43.452 29.3466 43.82 29.2426 44.116C29.1386 44.412 28.9746 44.644 28.7506 44.812C28.5346 44.98 28.2386 45.088 27.8626 45.136V45.196C27.9986 45.228 28.1346 45.292 28.2706 45.388C28.4066 45.484 28.5346 45.616 28.6546 45.784C28.7746 45.944 28.8626 46.148 28.9186 46.396L29.6986 49H28.4266L27.7066 46.42C27.6106 46.116 27.4786 45.9 27.3106 45.772C27.1426 45.644 26.9226 45.58 26.6506 45.58C26.1466 45.58 25.7146 45.58 25.3546 45.58C24.9946 45.572 24.6906 45.564 24.4426 45.556C24.2026 45.548 24.0066 45.544 23.8546 45.544L23.8906 44.584H26.6266C27.0186 44.576 27.3266 44.532 27.5506 44.452C27.7746 44.364 27.9346 44.212 28.0306 43.996C28.1346 43.78 28.1866 43.476 28.1866 43.084C28.1866 42.692 28.1346 42.392 28.0306 42.184C27.9346 41.968 27.7746 41.82 27.5506 41.74C27.3266 41.652 27.0186 41.608 26.6266 41.608C25.9546 41.608 25.3746 41.612 24.8866 41.62C24.3986 41.628 24.0706 41.632 23.9026 41.632L23.7346 40.72C24.0386 40.688 24.3266 40.664 24.5986 40.648C24.8706 40.632 25.1666 40.624 25.4866 40.624C25.8146 40.616 26.2026 40.612 26.6506 40.612ZM24.9226 40.72V49H23.7346V40.72H24.9226ZM32.7711 40.708C33.1711 40.708 33.5791 40.708 33.9951 40.708C34.4111 40.708 34.8191 40.716 35.2191 40.732C35.6271 40.74 36.0151 40.756 36.3831 40.78L36.3351 41.704H33.0351C32.7951 41.704 32.6191 41.764 32.5071 41.884C32.3951 42.004 32.3391 42.196 32.3391 42.46V47.26C32.3391 47.524 32.3951 47.72 32.5071 47.848C32.6191 47.968 32.7951 48.028 33.0351 48.028H36.3351L36.3831 48.94C36.0151 48.964 35.6271 48.98 35.2191 48.988C34.8191 48.996 34.4111 49 33.9951 49C33.5791 49.008 33.1711 49.012 32.7711 49.012C32.2751 49.012 31.8791 48.88 31.5831 48.616C31.2951 48.344 31.1471 47.984 31.1391 47.536V42.184C31.1471 41.728 31.2951 41.368 31.5831 41.104C31.8791 40.84 32.2751 40.708 32.7711 40.708ZM31.3551 44.176H35.8671V45.1H31.3551V44.176Z" fill="#63F25E"/>
          </svg>--}}
          <svg xmlns="http://www.w3.org/2000/svg" width="38" height="51" viewBox="0 0 38 51" fill="none">
            <mask id="path-1-inside-1_1_13" fill="white">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M35.7361 21C35.9095 20.0262 36 19.0237 36 18C36 8.61116 28.3888 1 19 1C9.61116 1 2 8.61116 2 18C2 19.0237 2.09048 20.0262 2.26387 21H1.24888C1.0852 20.0244 1 19.0221 1 18C1 8.05887 9.05887 0 19 0C28.9411 0 37 8.05887 37 18C37 19.0221 36.9148 20.0244 36.7511 21H35.7361Z"/>
            </mask>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M35.7361 21C35.9095 20.0262 36 19.0237 36 18C36 8.61116 28.3888 1 19 1C9.61116 1 2 8.61116 2 18C2 19.0237 2.09048 20.0262 2.26387 21H1.24888C1.0852 20.0244 1 19.0221 1 18C1 8.05887 9.05887 0 19 0C28.9411 0 37 8.05887 37 18C37 19.0221 36.9148 20.0244 36.7511 21H35.7361Z" fill="black"/>
            <path d="M35.7361 21L33.7671 20.6494L33.3486 23H35.7361V21ZM2.26387 21V23H4.65142L4.2329 20.6494L2.26387 21ZM1.24888 21L-0.723559 21.3309L-0.443539 23H1.24888V21ZM36.7511 21V23H38.4435L38.7236 21.3309L36.7511 21ZM37.7052 21.3506C37.8991 20.2616 38 19.1417 38 18H34C34 18.9056 33.92 19.7908 33.7671 20.6494L37.7052 21.3506ZM38 18C38 7.50659 29.4934 -1 19 -1V3C27.2843 3 34 9.71573 34 18H38ZM19 -1C8.50659 -1 0 7.50659 0 18H4C4 9.71573 10.7157 3 19 3V-1ZM0 18C0 19.1417 0.100931 20.2616 0.294834 21.3506L4.2329 20.6494C4.08002 19.7908 4 18.9056 4 18H0ZM1.24888 23H2.26387V19H1.24888V23ZM-1 18C-1 19.1335 -0.905509 20.2464 -0.723559 21.3309L3.22131 20.6691C3.0759 19.8024 3 18.9108 3 18H-1ZM19 -2C7.9543 -2 -1 6.9543 -1 18H3C3 9.16344 10.1634 2 19 2V-2ZM39 18C39 6.9543 30.0457 -2 19 -2V2C27.8366 2 35 9.16344 35 18H39ZM38.7236 21.3309C38.9055 20.2464 39 19.1335 39 18H35C35 18.9108 34.9241 19.8024 34.7787 20.6691L38.7236 21.3309ZM35.7361 23H36.7511V19H35.7361V23Z" fill="#98C9A3" mask="url(#path-1-inside-1_1_13)"/>
            <path d="M11.38 24.2L7.44 29.88C7.32 30.0667 7.19333 30.2333 7.06 30.38C6.94 30.5133 6.8 30.6533 6.64 30.8V30.84C6.81333 31 6.98 31.1667 7.14 31.34C7.3 31.5 7.43333 31.6667 7.54 31.84L11.66 38H9.4L4.62 30.78L9.2 24.2H11.38ZM3.66 24.2V28.44C3.66 28.8533 3.63333 29.2467 3.58 29.62C3.54 29.9933 3.47333 30.38 3.38 30.78C3.46 31.1533 3.52667 31.5333 3.58 31.92C3.63333 32.3067 3.66 32.6733 3.66 33.02V38H1.68V24.2H3.66ZM5.62 30.04V31.58H2.98V30.04H5.62ZM23.3527 24.2L19.4127 29.88C19.2927 30.0667 19.166 30.2333 19.0327 30.38C18.9127 30.5133 18.7727 30.6533 18.6127 30.8V30.84C18.786 31 18.9527 31.1667 19.1127 31.34C19.2727 31.5 19.406 31.6667 19.5127 31.84L23.6327 38H21.3727L16.5927 30.78L21.1727 24.2H23.3527ZM15.6327 24.2V28.44C15.6327 28.8533 15.606 29.2467 15.5527 29.62C15.5127 29.9933 15.446 30.38 15.3527 30.78C15.4327 31.1533 15.4993 31.5333 15.5527 31.92C15.606 32.3067 15.6327 32.6733 15.6327 33.02V38H13.6527V24.2H15.6327ZM17.5927 30.04V31.58H14.9527V30.04H17.5927ZM35.7653 24.2V32.68C35.7653 34.0267 35.5986 35.1133 35.2653 35.94C34.9453 36.7533 34.4186 37.3467 33.6853 37.72C32.952 38.08 31.972 38.26 30.7453 38.26C29.4653 38.26 28.4453 38.08 27.6853 37.72C26.9253 37.3467 26.372 36.7533 26.0253 35.94C25.692 35.1133 25.5253 34.0267 25.5253 32.68V24.2H27.5253V32.68C27.5253 33.64 27.6186 34.4067 27.8053 34.98C28.0053 35.54 28.332 35.94 28.7853 36.18C29.252 36.4067 29.872 36.52 30.6453 36.52C31.4186 36.52 32.0253 36.4067 32.4653 36.18C32.9186 35.94 33.2453 35.54 33.4453 34.98C33.6586 34.4067 33.7653 33.64 33.7653 32.68V24.2H35.7653Z" fill="#98C9A3"/>
            <path d="M4.384 40.576C4.784 40.584 5.196 40.604 5.62 40.636C6.052 40.668 6.48 40.732 6.904 40.828L6.82 41.68C6.476 41.664 6.088 41.652 5.656 41.644C5.232 41.636 4.82 41.632 4.42 41.632C4.14 41.632 3.9 41.64 3.7 41.656C3.5 41.672 3.336 41.716 3.208 41.788C3.08 41.86 2.984 41.976 2.92 42.136C2.864 42.296 2.836 42.516 2.836 42.796C2.836 43.22 2.916 43.52 3.076 43.696C3.236 43.864 3.496 43.992 3.856 44.08L5.524 44.524C6.164 44.684 6.604 44.956 6.844 45.34C7.084 45.716 7.204 46.224 7.204 46.864C7.204 47.344 7.148 47.732 7.036 48.028C6.932 48.324 6.764 48.552 6.532 48.712C6.308 48.872 6.016 48.984 5.656 49.048C5.296 49.112 4.868 49.144 4.372 49.144C4.1 49.144 3.74 49.132 3.292 49.108C2.844 49.084 2.328 49.016 1.744 48.904L1.828 48.028C2.3 48.044 2.684 48.06 2.98 48.076C3.284 48.084 3.544 48.088 3.76 48.088C3.976 48.088 4.192 48.088 4.408 48.088C4.808 48.088 5.124 48.06 5.356 48.004C5.588 47.94 5.752 47.82 5.848 47.644C5.944 47.46 5.992 47.196 5.992 46.852C5.992 46.556 5.956 46.324 5.884 46.156C5.82 45.988 5.712 45.864 5.56 45.784C5.416 45.696 5.228 45.624 4.996 45.568L3.28 45.1C2.68 44.932 2.256 44.66 2.008 44.284C1.76 43.908 1.636 43.408 1.636 42.784C1.636 42.304 1.688 41.916 1.792 41.62C1.904 41.324 2.072 41.104 2.296 40.96C2.52 40.808 2.804 40.708 3.148 40.66C3.492 40.604 3.904 40.576 4.384 40.576ZM11.9009 40.72V49H10.7009V40.72H11.9009ZM14.5409 40.72V41.752H8.07288V40.72H14.5409ZM18.6961 40.564C19.3041 40.564 19.8201 40.636 20.2441 40.78C20.6761 40.924 21.0201 41.16 21.2761 41.488C21.5321 41.816 21.7161 42.256 21.8281 42.808C21.9481 43.36 22.0081 44.044 22.0081 44.86C22.0081 45.668 21.9481 46.352 21.8281 46.912C21.7161 47.464 21.5321 47.904 21.2761 48.232C21.0201 48.56 20.6761 48.796 20.2441 48.94C19.8201 49.084 19.3041 49.156 18.6961 49.156C18.0881 49.156 17.5681 49.084 17.1361 48.94C16.7121 48.796 16.3681 48.56 16.1041 48.232C15.8481 47.904 15.6601 47.464 15.5401 46.912C15.4201 46.352 15.3601 45.668 15.3601 44.86C15.3601 44.044 15.4201 43.36 15.5401 42.808C15.6601 42.256 15.8481 41.816 16.1041 41.488C16.3681 41.16 16.7121 40.924 17.1361 40.78C17.5681 40.636 18.0881 40.564 18.6961 40.564ZM18.6961 41.608C18.1761 41.608 17.7641 41.708 17.4601 41.908C17.1561 42.108 16.9401 42.444 16.8121 42.916C16.6921 43.38 16.6321 44.028 16.6321 44.86C16.6321 45.684 16.6921 46.332 16.8121 46.804C16.9401 47.276 17.1561 47.612 17.4601 47.812C17.7641 48.012 18.1761 48.112 18.6961 48.112C19.2161 48.112 19.6241 48.012 19.9201 47.812C20.2241 47.612 20.4401 47.276 20.5681 46.804C20.6961 46.332 20.7601 45.684 20.7601 44.86C20.7601 44.028 20.6961 43.38 20.5681 42.916C20.4401 42.444 20.2241 42.108 19.9201 41.908C19.6241 41.708 19.2161 41.608 18.6961 41.608ZM26.6506 40.612C27.3066 40.612 27.8346 40.684 28.2346 40.828C28.6426 40.964 28.9386 41.208 29.1226 41.56C29.3066 41.904 29.3986 42.388 29.3986 43.012C29.3986 43.452 29.3466 43.82 29.2426 44.116C29.1386 44.412 28.9746 44.644 28.7506 44.812C28.5346 44.98 28.2386 45.088 27.8626 45.136V45.196C27.9986 45.228 28.1346 45.292 28.2706 45.388C28.4066 45.484 28.5346 45.616 28.6546 45.784C28.7746 45.944 28.8626 46.148 28.9186 46.396L29.6986 49H28.4266L27.7066 46.42C27.6106 46.116 27.4786 45.9 27.3106 45.772C27.1426 45.644 26.9226 45.58 26.6506 45.58C26.1466 45.58 25.7146 45.58 25.3546 45.58C24.9946 45.572 24.6906 45.564 24.4426 45.556C24.2026 45.548 24.0066 45.544 23.8546 45.544L23.8906 44.584H26.6266C27.0186 44.576 27.3266 44.532 27.5506 44.452C27.7746 44.364 27.9346 44.212 28.0306 43.996C28.1346 43.78 28.1866 43.476 28.1866 43.084C28.1866 42.692 28.1346 42.392 28.0306 42.184C27.9346 41.968 27.7746 41.82 27.5506 41.74C27.3266 41.652 27.0186 41.608 26.6266 41.608C25.9546 41.608 25.3746 41.612 24.8866 41.62C24.3986 41.628 24.0706 41.632 23.9026 41.632L23.7346 40.72C24.0386 40.688 24.3266 40.664 24.5986 40.648C24.8706 40.632 25.1666 40.624 25.4866 40.624C25.8146 40.616 26.2026 40.612 26.6506 40.612ZM24.9226 40.72V49H23.7346V40.72H24.9226ZM32.7711 40.708C33.1711 40.708 33.5791 40.708 33.9951 40.708C34.4111 40.708 34.8191 40.716 35.2191 40.732C35.6271 40.74 36.0151 40.756 36.3831 40.78L36.3351 41.704H33.0351C32.7951 41.704 32.6191 41.764 32.5071 41.884C32.3951 42.004 32.3391 42.196 32.3391 42.46V47.26C32.3391 47.524 32.3951 47.72 32.5071 47.848C32.6191 47.968 32.7951 48.028 33.0351 48.028H36.3351L36.3831 48.94C36.0151 48.964 35.6271 48.98 35.2191 48.988C34.8191 48.996 34.4111 49 33.9951 49C33.5791 49.008 33.1711 49.012 32.7711 49.012C32.2751 49.012 31.8791 48.88 31.5831 48.616C31.2951 48.344 31.1471 47.984 31.1391 47.536V42.184C31.1471 41.728 31.2951 41.368 31.5831 41.104C31.8791 40.84 32.2751 40.708 32.7711 40.708ZM31.3551 44.176H35.8671V45.1H31.3551V44.176Z" fill="#98C9A3"/>
          </svg>
            <span class="fs-4 m-2">متاجر الجامعة</span>
        </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto"></nav>
      <a href="/createstore" class="d-flex align-items-center text-dark text-decoration-none">
        <button type="button" class="btn btn-outline-info"><img src="https://cdn-icons-png.flaticon.com/512/3824/3824273.png" alt="" height="30">  انشئ متجرك مجاناً  </button>
      </a>
      
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">متاجر الجامعة</h1>
      <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4">Compare plans</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Free</th>
            <th style="width: 22%;">Pro</th>
            <th style="width: 22%;">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Public</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Private</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Permissions</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Sharing</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Unlimited members</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Extra security</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
        <small class="d-block mb-3 text-muted">&copy; 2017–2022</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>


    
  </body>
</html>
