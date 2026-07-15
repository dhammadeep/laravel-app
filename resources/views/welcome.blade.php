<!DOCTYPE html>
<html lang="mr">
<head>
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta name="theme-color" content="#102A5C">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>कवी कालिदास शासकीय औद्योगिक प्रशिक्षण संस्था, रामटेक</title>

    <style>
        body {
            font-family: "Noto Sans Devanagari", Arial, sans-serif;
            margin: 0;
            background: #f5f7fa;
            color: #333;
        }

        .header {
            background: #0b3d91;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 32px;
        }

        .header p {
            font-size: 18px;
        }

        .container {
            width: 85%;
            margin: 30px auto;
        }

        .card {
            background: white;
            padding: 30px;
            margin-bottom: 25px;
            border-radius: 10px;
            box-shadow: 0px 3px 12px rgba(0,0,0,0.1);
        }

        .card h2 {
            color: #0b3d91;
            border-bottom: 2px solid #0b3d91;
            padding-bottom: 10px;
        }

        .stats {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .stat-box {
            background: #0b3d91;
            color:white;
            padding:20px;
            border-radius:10px;
            width:200px;
            text-align:center;
        }

        .stat-box h3 {
            font-size:35px;
            margin:5px;
        }

        .trades {
            display:flex;
            flex-wrap:wrap;
            gap:15px;
        }

        .trade {
            background:#e8f0fe;
            padding:15px 20px;
            border-radius:8px;
            font-weight:bold;
        }

        footer {
            background:#222;
            color:white;
            text-align:center;
            padding:15px;
        }

        .hero {
            position: relative;
        }

        .hero img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
            width: 90%;
            z-index: 1;
        }

        .hero-content h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .hero-content p {
            font-size: 22px;
        }

        @media (max-width: 768px) {
            .hero img {
                height: 280px;
            }

            .hero-content h1 {
                font-size: 26px;
            }

            .hero-content p {
                font-size: 16px;
            }
        }

    </style>

</head>

<body>


<div class="hero">
    <img src="{{ asset('images/college.jpeg') }}"
         alt="College Building">

    <div class="hero-content">
        <h1>कवी कालिदास शासकीय औद्योगिक प्रशिक्षण संस्था, रामटेक</h1>

        <p>
            कौशल्य विकास • गुणवत्तापूर्ण तांत्रिक शिक्षण • उज्ज्वल भविष्य
        </p>
    </div>
</div>


<div class="container">


<div class="card">

<h2>संस्थेची माहिती</h2>

<p>
कवी कालिदास शासकीय औद्योगिक प्रशिक्षण संस्था रामटेक ही 
विद्यार्थ्यांना आधुनिक तांत्रिक कौशल्य व रोजगाराभिमुख प्रशिक्षण 
देणारी एक अग्रगण्य संस्था आहे.

</p>

<p>
या संस्थेमध्ये एकूण <b>८ व्यवसाय</b> असून 
एकूण <b>१५ तुकड्या</b> कार्यरत आहेत.
संस्थेमध्ये विद्यार्थ्यांना उद्योग क्षेत्राच्या गरजेनुसार 
प्रशिक्षण दिले जाते.
</p>


</div>



<div class="stats">

<div class="stat-box">
<h3>8</h3>
<p>व्यवसाय</p>
</div>


<div class="stat-box">
<h3>15</h3>
<p>तुकड्या</p>
</div>


<div class="stat-box">
<h3>100+</h3>
<p>विद्यार्थी</p>
</div>


</div>



<div class="card">

<h2>उपलब्ध व्यवसाय</h2>


<div class="trades">

<div class="trade">
जोडारी (Fitter)
</div>

<div class="trade">
कातारी (Turner)
</div>


<div class="trade">
यांत्रिक मोटार गाडी (MMV)
</div>


<div class="trade">
तारतंत्री (Wireman)
</div>


<div class="trade">
वीजतंत्री (Electrician)
</div>


<div class="trade">
संधाता (Welder)
</div>


<div class="trade">
यांत्रिक डिझेल (Mechanic Diesel)
</div>


<div class="trade">
फॅशन टेक्नॉलॉजी
</div>


</div>

</div>




<div class="card">

<h2>अभ्यासक्रम</h2>

<p>
दोन वर्षांच्या अभ्यासक्रमांमध्ये जोडारी, कातारी,
यांत्रिक मोटार गाडी, तारतंत्री आणि वीजतंत्री या व्यवसायांचा समावेश आहे.

</p>

<p>
एक वर्षीय अभ्यासक्रमांमध्ये संधाता, यांत्रिक डिझेल
आणि फॅशन टेक्नॉलॉजी या व्यवसायांचा समावेश आहे.
</p>

</div>



<div class="card">

<h2>आमचे उद्दिष्ट</h2>

<p>
विद्यार्थ्यांना दर्जेदार तांत्रिक शिक्षण देऊन त्यांना
स्वावलंबी बनवणे आणि उद्योग क्षेत्रासाठी कुशल मनुष्यबळ तयार करणे
हे संस्थेचे प्रमुख उद्दिष्ट आहे.
</p>

</div>



</div>


<footer>

© 2026 कवी कालिदास शासकीय औद्योगिक प्रशिक्षण संस्था, रामटेक

</footer>


</body>
</html>