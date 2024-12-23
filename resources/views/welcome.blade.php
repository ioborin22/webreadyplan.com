<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_wr/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_wr/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_wr/favicon-16x16.png') }}" />
    <meta property="og:image" content="{{ asset('templates/wrp.webp') }}" />
    <meta name="twitter:image" content="{{ asset('templates/wrp.webp') }}" />
    <title>Web-Ready Plan: Website + Email + Hosting for $88/year</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="https://webreadyplan.com/">
    <meta name="description"
        content="Get your website, business email, and hosting in one complete package. Perfect for small businesses in the USA. Affordable, hassle-free, and ready in just 3 days!" />
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10967820321">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'AW-10967820321');
        </script>
    <script>
        // FAQ
        document.addEventListener('DOMContentLoaded', () => {
            const questions = document.querySelectorAll('.faq-question');

            questions.forEach((question) => {
                question.addEventListener('click', () => {
                    const answer = question.nextElementSibling;
                    answer.style.display =
                        answer.style.display === 'block' ? 'none' : 'block';
                });
            });
        });

        // Carousel
        document.addEventListener('DOMContentLoaded', () => {
            const track = document.querySelector('.carousel-track');
            const images = Array.from(track.children);

            const imageWidth = images[0].offsetWidth + 10;
            const containerWidth = track.parentElement.offsetWidth;

            const requiredCopies =
                Math.ceil(containerWidth / (imageWidth * images.length)) + 1;
            for (let i = 0; i < requiredCopies; i++) {
                images.forEach((image) => {
                    const clone = image.cloneNode(true);
                    track.appendChild(clone);
                });
            }

            const totalWidth = track.children.length * imageWidth;
            track.style.width = `${totalWidth}px`;
        });

        // Modal
        function openModal() {
            const modal = document.getElementById('orderModal');
            modal.style.display = 'flex';
            document.body.classList.add('modal-open'); // Disable scrolling
        }

        function closeModal() {
            const modal = document.getElementById('orderModal');
            modal.style.display = 'none';
            document.body.classList.remove('modal-open'); // Enable scrolling
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Russo+One&family=Molle:ital,wght@1,400&family=Libre+Baskerville&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Libre Baskerville', 'Arial', sans-serif;
            background-color: #f4f4f4;
            line-height: 1.6;
            color: #002147;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            text-align: center;
        }

        h1 {
            color: #3c3b6e;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .table-container {
            margin: 30px 0;
            overflow-x: auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            min-width: 800px;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #3c3b6e;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f4f4f4;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .highlight {
            background-color: #d1e7dd;
            color: #3c3b6e;
            font-weight: bold;
        }

        .plus {
            color: green;
            font-weight: bold;
        }

        .minus {
            color: #bb133e;
            font-weight: bold;
        }

        .block {
            margin: 30px 0;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .block h2 {
            text-align: center;
            color: #3c3b6e;
            margin-bottom: 15px;
        }

        .block ul {
            list-style-type: none;
            padding: 0;
            line-height: 1.8;
        }

        .block li {
            margin: 10px 0;
            padding: 10px;
            background: #f9f9f9;
            border-left: 5px solid #3c3b6e;
        }

        .block li strong {
            color: #333;
        }

        .badge {
            display: inline-block;
            padding: 1em;
            background: white;
            border: 5px solid #3c3b6e;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .text-line1 {
            font-size: 3em;
            font-weight: bold;
            text-transform: uppercase;
            color: #3c3b6e;
            letter-spacing: 0.1em;
            font-family: 'Russo One', sans-serif;
        }

        .text-line1-order {
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
            color: #3c3b6e;
            letter-spacing: 0.1em;
            font-family: 'Russo One', sans-serif;
        }

        .text-line2 {
            font-size: 4em;
            font-weight: bold;
            text-transform: uppercase;
            color: #bb133e;
            letter-spacing: 0.1em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            font-family: 'Molle', cursive;
            transform: rotate(-5deg);
        }

        .text-line2-order {
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
            color: #bb133e;
            letter-spacing: 0.1em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            font-family: 'Molle', cursive;
            transform: rotate(-5deg);
        }

        .text-line3 {
            font-size: 2.5em;
            font-weight: bold;
            text-transform: uppercase;
            color: #3c3b6e;
            letter-spacing: 0.1em;
            font-family: 'Russo One', sans-serif;
        }

        .text-line3-order {
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
            color: #3c3b6e;
            letter-spacing: 0.1em;
            font-family: 'Russo One', sans-serif;
        }

        .faq h2 {
            text-align: center;
            color: #3c3b6e;
            margin-bottom: 15px;
        }

        .faq-item {
            margin-bottom: 10px;
        }

        .faq-question {
            cursor: pointer;
            padding: 10px;
            background: #f9f9f9;
            border-left: 5px solid #3c3b6e;
            margin: 5px 0;
            font-weight: bold;
        }

        .faq-answer {
            display: none;
            padding: 10px;
            background: #f4f4f4;
            border-left: 5px solid #d1e7dd;
        }

        .carousel-container {
            text-align: center;
            margin: 30px auto;
            width: 100%;
            max-width: 1200px;
            overflow: hidden;
            position: relative;
        }

        .carousel-container h2 {
            font-size: 2em;
            color: #3c3b6e;
            margin-bottom: 20px;
        }

        .carousel {
            display: flex;
            align-items: center;
            overflow: hidden;
            width: 100%;
            height: 300px;
        }

        .carousel img {
            width: 300px;
            height: auto;
            margin-right: 10px;
            border-radius: 8px;
            object-fit: cover;
        }

        .carousel-track {
            display: flex;
            animation: scrollCarousel 120s linear infinite;
        }

        @keyframes scrollCarousel {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* Button Style */
        .order-btn {
            padding: 20px 40px;
            background-color: #bb133e;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.5em;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .order-btn:hover {
            background-color: #8b0f30;
        }

        /* Modal Overlay */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        /* Modal Content */
        .modal-content {
            background: white;
            padding: 30px;
            width: 90%;
            max-width: 400px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        label {
            margin-top: 10px;
            font-size: 1em;
            color: #333;
            display: block;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box;
        }

        input:focus {
            border-color: #3c3b6e;
            outline: none;
        }

        .submit-btn {
            padding: 10px 20px;
            background-color: #3c3b6e;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            font-size: 1em;
            transition: background-color 0.3s;
        }



        .submit-btn:disabled {
            background-color: #999;
            cursor: not-allowed;
        }

        .btn-text {
            display: inline-block;
        }

        .spinner {
            width: 16px;
            height: 16px;
            margin-left: 10px;
            border: 2px solid #fff;
            border-top: 2px solid transparent;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .submit-btn:hover {
            background-color: #002147;
        }

        /* Close Button Style */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.5em;
            font-weight: bold;
            color: #333;
            cursor: pointer;
        }

        .close-btn:hover {
            color: #bb133e;
        }

        /* Disable scrolling when modal is open */
        body.modal-open {
            overflow: hidden;
        }

        .legal-info {
            text-align: center;
            font-size: 0.8em;

            margin-top: 30px;
            padding: 10px;
            border-top: 1px solid #ddd;
        }

        .legal-info a {
            color: #3c3b6e;
            text-decoration: none;
        }

        .legal-info a:hover {
            text-decoration: underline;
        }

        .promo-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #bb133e;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 16px;
            font-weight: bold;
            opacity: 0;
            transform: translateY(-100%);
            transition: opacity 0.5s ease, transform 0.5s ease;
            z-index: 9999;
            cursor: pointer;
        }

        .promo-bar.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .scroll-to-top-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: #bb133e;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
            z-index: 1000;


            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;


            padding: 0;
            line-height: 1;
        }

        .scroll-to-top-btn:hover {
            background-color: #8b0f30;
        }

        .scroll-to-top-btn.show {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .scroll-to-top-btn.hide {
            opacity: 0;
            transform: translateY(20px);
        }
    </style>
</head>

<body>
    <div id="promoBar" class="promo-bar" onclick="scrollToOrderButton()">
        <span>Web-Ready Plan: Website + Email + Hosting for $88/year!</span>
    </div>
    <button id="scrollToTopBtn" class="scroll-to-top-btn">↑ Top</button>
    <div class="container">
        <div class="badge"
            style="
          position: relative;
          text-align: center;
          padding: 1em;
          border: 5px solid #002147;
          border-radius: 20px;
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
          background: url('https://uk.usembassy.gov/wp-content/uploads/sites/16/US_Flag_Color_72DPI_750x450.jpg')
            no-repeat center center;
          background-size: cover;
        ">
            <div
                style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.85);
            z-index: 1;
            border-radius: 15px;
          ">
            </div>
            <div style="position: relative; z-index: 2">
                <div class="text-line1">Make America</div>
                <div class="text-line2">Web-Ready</div>
                <div class="text-line3">Again</div>
            </div>
        </div>


        <h1>Web-Ready Plan: Website, Email & Hosting All-In-One Solution</h1>
        <h2>Start Your Business Online in Just 3 Days:<br />
            Website + 5 Business Emails<br />
            for $538 one-time payment<br />
            + $88 annual renewal!<br />
            (Taxes included)</h2>


        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>
                            <span class="text-line2-order" style="text-shadow: none">Web-Ready</span><br /><span
                                class="text-line3-order" style="color: #ffffff">Plan</span>
                        </th>
                        <th>
                            Google Workspace or Microsoft 365 + <br />Website Builders like
                            Wix, Squarespace, or Weebly
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Setup Simplicity</td>
                        <td class="plus">All-in-One Solution</td>
                        <td class="minus">Separate Providers</td>
                    </tr>
                    <tr>
                        <td>Cost (Initial)</td>
                        <td class="highlight">$538 (One-Time)</td>
                        <td>
                            Free if set up independently <br />or $500–$1200 if hiring
                            specialists
                        </td>
                    </tr>
                    <tr>
                        <td>Cost (Annual)</td>
                        <td class="highlight">$88 (Annual)</td>
                        <td>$264 (Google Workspace + Wix)</td>
                    </tr>
                    <tr>
                        <td>Professional Email</td>
                        <td class="plus">5 Accounts Included</td>
                        <td class="minus">$6/User/Month</td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td class="plus">
                            Custom 4 Pages<br />(Home, About Us, Services, Contact)
                        </td>
                        <td class="minus">Limited Flexibility</td>
                    </tr>
                    <tr>
                        <td>Domain Setup</td>
                        <td class="plus">Included</td>
                        <td class="minus">Separate Purchase</td>
                    </tr>
                    <tr>
                        <td>Support</td>
                        <td class="plus">One Point of Contact</td>
                        <td class="minus">Multiple Providers</td>
                    </tr>
                    <tr>
                        <td>Hassle-Free Maintenance</td>
                        <td class="plus">Yes</td>
                        <td class="minus">Requires Manual Tracking</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="block">
            <h2>Here’s How Your Website Could Look</h2>
            <div class="carousel">
                <div class="carousel-track">
                    <img src="{{ asset('templates/jobboard2.webp') }}" alt="Template 1" loading="lazy" />
                    <img src="{{ asset('templates/resta.webp') }}" alt="Template 2" loading="lazy" />
                    <img src="{{ asset('templates/musico.webp') }}" alt="Template 3" loading="lazy" />
                    <img src="{{ asset('templates/activitar.webp') }}" alt="Template 4" loading="lazy" />
                    <img src="{{ asset('templates/burger.webp') }}" alt="Template 5" loading="lazy" />
                    <img src="{{ asset('templates/pillowmart.webp') }}" alt="Template 6" loading="lazy" />
                    <img src="{{ asset('templates/eventcon.webp') }}" alt="Template 7" loading="lazy" />
                    <img src="{{ asset('templates/unearth.webp') }}" alt="Template 8" loading="lazy" />
                    <img src="{{ asset('templates/sona.webp') }}" alt="Template 9" loading="lazy" />
                    <img src="{{ asset('templates/wiser.webp') }}" alt="Template 10" loading="lazy" />
                    <img src="{{ asset('templates/haze.webp') }}" alt="Template 11" loading="lazy" />
                    <img src="{{ asset('templates/anipat.webp') }}" alt="Template 12" loading="lazy" />
                    <img src="{{ asset('templates/homebuilder.webp') }}" alt="Template 13" loading="lazy" />
                    <img src="{{ asset('templates/manup.webp') }}" alt="Template 14" loading="lazy" />
                    <img src="{{ asset('templates/logis.webp') }}" alt="Template 15" loading="lazy" />
                    <img src="{{ asset('templates/aznews.webp') }}" alt="Template 16" loading="lazy" />
                    <img src="{{ asset('templates/elit.webp') }}" alt="Template 17" loading="lazy" />
                    <img src="{{ asset('templates/invits.webp') }}" alt="Template 18" loading="lazy" />
                    <img src="{{ asset('templates/cleaningcompany.webp') }}" alt="Template 19" loading="lazy" />
                    <img src="{{ asset('templates/foodeiblog.webp') }}" alt="Template 20" loading="lazy" />
                    <img src="{{ asset('templates/cargo.webp') }}" alt="Template 21" loading="lazy" />
                    <img src="{{ asset('templates/stamina.webp') }}" alt="Template 22" loading="lazy" />

                    <img src="{{ asset('templates/marga.webp') }}" alt="Template 23" loading="lazy" />
                    <img src="{{ asset('templates/fundraiser.webp') }}" alt="Template 24" loading="lazy" />
                    <img src="{{ asset('templates/harbor.webp') }}" alt="Template 25" loading="lazy" />
                    <img src="{{ asset('templates/legalcare.webp') }}" alt="Template 26" loading="lazy" />
                    <img src="{{ asset('templates/nissa.webp') }}" alt="Template 27" loading="lazy" />
                    <img src="{{ asset('templates/carrent.webp') }}" alt="Template 28" loading="lazy" />
                    <img src="{{ asset('templates/xgym.webp') }}" alt="Template 29" loading="lazy" />
                    <img src="{{ asset('templates/violet.webp') }}" alt="Template 30" loading="lazy" />
                    <img src="{{ asset('templates/thequest.webp') }}" alt="Template 31" loading="lazy" />
                    <img src="{{ asset('templates/mondy.webp') }}" alt="Template 32" loading="lazy" />
                </div>
            </div>
        </div>

        <div class="block">
            <h2>Who Is This Plan For?</h2>
            <ul>
                <li>
                    <strong>Small Businesses:</strong> Quickly and affordably get online
                    with a professional website and business email.
                </li>
                <li>
                    <strong>Entrepreneurs:</strong> Save money with a complete,
                    ready-to-go solution.
                </li>
                <li>
                    <strong>Non-Tech Users:</strong> Everything is set up for you, no
                    technical skills needed.
                </li>
                <li>
                    <strong>Local Stores:</strong> Showcase your business online with
                    ease.
                </li>
                <li>
                    <strong>Anyone Who Wants Simplicity:</strong> One solution, one
                    payment, no hassle.
                </li>
            </ul>
        </div>

        <div class="block">
            <h2>What We Need to Get Started</h2>
            <ul>
                <li>Provide your company name so we can help choose a domain.</li>
                <li>Share a brief or detailed description of your company.</li>
                <li>Provide a brief or detailed description of your services.</li>
                <li>Share your company’s contact information.</li>
            </ul>
        </div>

        <div class="block">
            <h2>What You Get</h2>
            <ul>
                <li>A domain for your company.</li>
                <li>
                    A fully functional website on your domain with 4 pages (Home, About
                    Us, Services, Contact).
                </li>
                <li>5 professional email accounts (e.g., info@yourdomain.com).</li>
                <li>
                    Complete setup and hosting support with a 99.9% uptime guarantee.
                </li>
                <li>
                    Basic SEO optimization for correct functionality and visibility.
                </li>
            </ul>
        </div>

        <div class="block">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <div class="faq-question">
                    What is included in the Web-Ready Plan?
                </div>
                <div class="faq-answer">
                    The Web-Ready Plan includes a custom domain, a fully functional
                    website with 4 pages (Home, About Us, Services, Contact), 5
                    professional email accounts, complete setup and hosting support, and
                    basic SEO optimization.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">How long does it take to set up?</div>
                <div class="faq-answer">
                    The entire setup process is completed within 3 days from the time
                    you provide all the required information.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Do I need technical knowledge to use this plan?
                </div>
                <div class="faq-answer">
                    No technical knowledge is required. We handle everything for you,
                    from domain registration to website setup and hosting configuration.
                    Additionally, we will fully set up your corporate email, ensuring it
                    is fully functional and does not end up in the spam folders of major
                    email providers.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">What happens after the first year?</div>
                <div class="faq-answer">
                    After the first year, you will need to renew your plan for $88/year
                    to maintain your website and email services.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Can I add more email accounts later?</div>
                <div class="faq-answer">
                    Yes, additional email accounts can be added at any time for an
                    additional fee.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Can you upgrade or customize my website as my business grows?
                </div>
                <div class="faq-answer">
                    Absolutely! This plan is a minimal setup we’ve designed to get your
                    business online. As your business grows, we can add any features or
                    complexity you need to support your operations as an additional
                    service.
                </div>
            </div>
        </div>

        <div class="container">
            <button class="order-btn" onclick="openModal()">
                Order Your Web-Ready Plan
            </button>
        </div>

        <div class="modal" id="orderModal">
            <div class="modal-content">
                <span class="close-btn" onclick="closeModal()">&times;</span>
                <div id="modal-content">
                    <h2>
                        <span class="text-line1-order">Request Your</span><br />
                        <span class="text-line2-order">Web-Ready</span><br />
                        <span class="text-line3-order">Plan</span>
                    </h2>
                    <form id="orderForm" action="/submit-web-ready-form" method="POST">
                        @csrf
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required
                            placeholder="Enter your name" />
                        <label for="phone">Your Phone</label>
                        <input type="tel" id="phone" name="phone" required
                            placeholder="Enter your phone" />
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required
                            placeholder="Enter your email" />
                        <button type="submit" class="submit-btn" onclick="gtag('event', 'conversion', { 'send_to': 'AW-10967820321/-pRNCMPv7voZEKHQ7u0o' });">
                            <span class="btn-text">Launch My Website</span>
                            <span class="spinner" style="display: none;"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="legal-info">
            <p>
                The “Web-Ready Plan” is a unique offering by GETWAB INC., a trusted software development company based
                in the USA. All official inquiries and communication regarding contracts and legal responsibilities
                should be directed through the company's website at
                <a href="https://www.getwabinc.com" target="_blank">www.getwabinc.com</a>.
            </p>
        </div>

        <script>
            document.getElementById('orderForm').addEventListener('submit', async (event) => {
                event.preventDefault(); // Prevent default form submission

                const submitButton = document.querySelector('.submit-btn');
                const btnText = submitButton.querySelector('.btn-text');
                const spinner = submitButton.querySelector('.spinner');

                // Show spinner and disable button
                btnText.style.display = 'none';
                spinner.style.display = 'inline-block';
                submitButton.disabled = true;

                // Get CSRF token from the meta tag
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                // Collect form data
                const formData = new FormData(event.target);
                const data = Object.fromEntries(formData.entries()); // Convert to plain object

                try {
                    // Send form data to the server
                    const response = await fetch('/submit-web-ready-form', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken, // Add CSRF token to request headers
                        },
                        body: JSON.stringify(data), // Convert data to JSON string
                    });

                    // Check if the response is not OK
                    if (!response.ok) {
                        throw new Error('Server error: ' + response.statusText);
                    }

                    const result = await response.json(); // Parse JSON response

                    // Handle success response
                    if (result.success) {
                        gtag('event', 'conversion', { 'send_to': 'AW-10967820321/-pRNCMPv7voZEKHQ7u0o' });
                        const modalContent = document.getElementById('modal-content');
                        modalContent.innerHTML = `
                <h2>Thank You!</h2>
                <p>Your request has been successfully submitted. We will contact you shortly!</p>
            `;
                    } else {
                        // Handle server failure
                        alert('Failed to send your message. Please try again later.');
                    }
                } catch (error) {
                    // Handle network or server errors
                    console.error('Error:', error);
                    alert('An error occurred. Please check your network connection.');
                } finally {
                    // Re-enable the button and hide spinner
                    btnText.style.display = 'inline-block';
                    spinner.style.display = 'none';
                    submitButton.disabled = false;
                }
            });


            window.addEventListener('scroll', () => {
                const promoBar = document.getElementById('promoBar');

                if (window.scrollY > 200) {
                    promoBar.classList.add('visible');
                } else {
                    promoBar.classList.remove('visible');
                }
            });


            function scrollToOrderButton() {
                const orderButton = document.querySelector('.order-btn');
                if (orderButton) {
                    orderButton.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            }

            document.addEventListener('DOMContentLoaded', () => {
                const scrollToTopBtn = document.getElementById('scrollToTopBtn');

                window.addEventListener('scroll', () => {
                    if (window.scrollY > 300) {
                        scrollToTopBtn.classList.add('show');
                        scrollToTopBtn.classList.remove('hide');
                    } else {
                        scrollToTopBtn.classList.add('hide');
                        scrollToTopBtn.classList.remove('show');
                    }
                });

                scrollToTopBtn.addEventListener('click', () => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth',
                    });
                });
            });
        </script>
</body>

</html>
