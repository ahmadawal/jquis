<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="/css/app.css">
  <style>
    .container {
      max-width: 960px;
      margin: 0 auto;
    }
    section.section:last-child {
      margin-bottom: 0;
    }
    section.section h2 {
      margin-bottom: 40px;
      font-family: 'Nunito', sans-serif;
      font-size: 30px;
    }
    section.section p {
      margin-bottom: 40px;
      font-size: 16px;
      font-weight: 300;
    }
    section.section p:last-child {
      margin-bottom: 0;
    }
    section.section.content {
      padding: 40px 0;
    }
    section.section.parallax {
      height: 600px;
      background-position: 50% 50%;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    section.section.parallax h1 {
      color: rgba(255,255,255,0.8);
      font-size: 48px;
      margin: 0 auto;
      line-height: 600px;
      font-weight: 700;
      text-align: center;
      text-transform: uppercase;
      text-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
    section.section.parallax-1 {
      background-image: url('/images/wallpaper.jpg');
    }
    section.section.parallax-2 {
      background-image: url('/images/bg2.jpg');
    }
    section.section.parallax-3 {
      background-image: url('/images/bg3.jpg');
    }
    @media all and (min-width:600px) {
      section.section h2 {
        font-size: 42px;
      }
      section.section p {
        font-size: 20px;
      }
      section.section.parallax h1 {
        font-size: 96px;
      }
    }
    @media all and (min-width: 960px) {
      section.section.parallax h1 {
        font-size: 160px;
      }
    }
  </style>
</head>
<body style="margin: o auto;">
  <section class="section parallax parallax-1">
    <div class="container">
      <h1>Section 1</h1>
    </div>
  </section>
  <section class="section content">
    <div class="container">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe tenetur laborum velit laboriosam dolorem autem architecto dignissimos, veniam eveniet, sed doloremque voluptate, ratione maiores ipsum provident. Quo fuga laborum maiores!</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint omnis consectetur atque a iusto qui nisi, dolores quaerat quidem aliquid? Aliquid, perferendis blanditiis modi at soluta sapiente itaque possimus? Itaque.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam iure voluptatem natus sunt, ipsam tenetur debitis, aliquam neque numquam perferendis obcaecati temporibus maiores eligendi rem recusandae. Pariatur minus quos ea.</p>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi neque optio aperiam ipsum. At enim dolorum distinctio, neque optio quasi consequatur natus voluptatibus ut nostrum. Sit quasi molestias sint porro!</p>
    </div>
  </section>
  <section class="section parallax parallax-2">
    <div class="container">
      <h1>Section title 2</h1>
    </div>
  </section>

  <section class="content section">
    <div class="container">
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem commodi qui pariatur mollitia ea dolorum odio fugiat! Quos nemo facilis sequi iste mollitia. Illum facere eaque non animi eius culpa!</p>
    </div>
  </section>
  
  <section class="section parallax parallax-3">
    <div class="container">
      <h2>Sample title 3</h2>
    </div>
  </section>
  <section class="content section">
    <div class="container">
      <h2>Sample title 3</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, debitis. Nostrum itaque rem odio placeat distinctio assumenda repellat sit at fuga reiciendis facilis voluptate possimus esse, eos quia omnis voluptatem.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, magni officia rerum quidem repellendus eius incidunt veniam quos ipsam excepturi cumque temporibus, porro ad! Odit similique ullam enim alias deserunt?</p>
    </div>
  </section>
</body>
</html>