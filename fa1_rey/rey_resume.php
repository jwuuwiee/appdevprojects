<?php
$firstname = "Juliana Simone";
$lastname  = "Rey";
$title     = "Aspiring Cybersecurity Analyst";
$email     = "jusirey@gmail.com";
$phone     = "09996622770";
$location  = "Manila, Philippines";
$profile   = "Aspiring cybersecurity analyst and an IT student with skills in coding, design tools, and problem-solving.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= "$firstname $lastname – Portfolio" ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;1,300&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <style>

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root { --rose:#c8536e; --rose-lt:#f2b8c6; --blush:#fce8ef; --ink:#2b1a21; --muted:#8a5d6b; --border:#f0cdd7; }

    body {
     font-family:'DM Sans',sans-serif;
     background:var(--blush); 
     min-height:100vh; 
     display:flex; 
     align-items:center; 
     justify-content:center; 
     padding:32px 20px; }

    .card {
      width:100%;
      max-width:1100px;
      background:#fdf6f8;
      border-radius:20px;
      overflow:hidden;
      box-shadow:0 24px 72px rgba(43,26,33,.12);
      display:grid; 
      grid-template-rows:auto 1fr auto; }

    .hero {
       background:linear-gradient(135deg,#2b1a21,#5a2a3a,#c8536e);
        padding:44px 52px 36px;
         display:flex; justify-content:space-between;
          align-items:flex-end;
         }

    .hero-name { 
      font-family:'Cormorant Garamond',serif;
       font-size:clamp(2.2rem,4.5vw,3.6rem); 
       font-weight:300; 
       color:#fff; 
       line-height:1.05; 
      }

    .hero-name em {
       font-style:italic; 
       color:var(--rose-lt);
       }

    .hero-sub { 
      font-size:.7rem; 
      letter-spacing:.18em; 
      text-transform:uppercase; 
      color:var(--rose-lt); 
      margin-top:8px; 
    }

    .hero-contact { 
      text-align:right; 
      display:flex; 
      flex-direction:column; 
      gap:6px; 
    }

    .hero-contact a, .hero-contact span { 
      font-size:.78rem; 
      color:rgba(255,255,255,.7); 
      text-decoration:none; 
    }
    .hero-contact a:hover { 
      color:var(--rose-lt); 
    }

    .body { 
      display:grid; 
      grid-template-columns:280px 1fr; 
    }

    .sidebar { 
      background:#fff; 
      border-right:1px solid var(--border); 
      padding:32px 26px; 
      display:flex; 
      flex-direction:column; 
      gap:24px; 
    }

    .main { 
      padding:32px 40px; 
      display:flex; 
      flex-direction:column; 
      gap:24px;
     }

    h2 { 
      font-size:.62rem; 
      font-weight:500; 
      letter-spacing:.2em; 
      text-transform:uppercase; 
      color:var(--rose); 
      margin-bottom:10px; 
      display:flex; 
      align-items:center; 
      gap:8px; 
    }

    h2::after { 
      content:''; 
      flex:1; height:1px; 
      background:var(--border); 
    }

    .tags { 
    display:flex; 
    flex-wrap:wrap; 
    gap:5px; 
  }

    .tag { 
      font-size:.72rem; 
      background:var(--blush); 
      color:var(--rose); 
      border:1px solid var(--border); 
      padding:3px 10px; 
      border-radius:20px; 
    }


    ul { 
      list-style:none; 
      display:flex; 
      flex-direction:column; 
      gap:4px; 
    }

    ul li { 
      font-size:.8rem; 
      color:var(--muted); 
      padding-left:12px; 
      position:relative; 
    }

    ul li::before {
       content:'·'; 
       osition:absolute; 
       left:0; 
       color:var(--rose-lt); 
       font-size:1.1rem; 
       line-height:1; 
      }

    .edu + .edu { 
      margin-top:14px; 
    }

    .edu-deg { 
      font-size:.8rem; 
      font-weight:500; 
      color:var(--ink); 
    }

    .edu-school { 
      font-size:.74rem; 
      color:var(--muted); 
    }

    .edu-year { 
      font-size:.7rem; 
      color:var(--rose-lt); 
      font-style:italic; 
    }

    .profile { 
      font-family:'Cormorant Garamond',serif; 
      font-size:1.05rem; 
      line-height:1.75; 
      color:var(--ink); 
    }

    .exp-head { 
      display:flex; 
      justify-content:space-between; 
    }
    .exp-role { 
      font-size:.9rem; 
      font-weight:500; 
      color:var(--ink); 
    }
    .exp-date { 
      font-size:.73rem; 
      color:var(--muted); 
      font-style:italic; 
    }

    .exp-place { 
      font-size:.76rem; 
      color:var(--rose);
       margin:2px 0 8px; 
      }

    .cert { 
      display:flex; 
      gap:10px; 
      align-items:flex-start; 
      background:var(--blush); 
      border:1px solid var(--border); 
      border-radius:8px; 
      padding:9px 13px; 
    }

    .cert + .cert {
       margin-top:7px;
       }
    .cert-dot { 
      width:7px; 
      height:7px; 
      border-radius:50%; 
      background:var(--rose); 
      flex-shrink:0; 
      margin-top:4px; 
    }

    .cert-name { 
      font-size:.8rem; 
      font-weight:500; 
      color:var(--ink); 
    }
    .cert-date { 
      font-size:.72rem; 
      color:var(--muted); 
    }

    footer { 
      background:#fff; 
      border-top:1px solid var(--border); 
      padding:14px 40px; 
      display:flex; 
      justify-content:center;
       gap:18px; 
      }

    footer span { 
      font-size:.73rem; 
      color:var(--muted); 
    }

    footer a { 
      font-size:.73rem; 
      color:var(--rose); 
      text-decoration:none; 
    }
    
  </style>
</head>
<body>
<div class="card">

  <header class="hero">
    <div>
      <h1 class="hero-name"><?= $firstname ?><br><em><?= $lastname ?></em></h1>
      <p class="hero-sub"><?= $title ?></p>
    </div>
    <div class="hero-contact">
      <a href="mailto:<?= $email ?>"><?= $email ?></a>
      <span><?= $phone ?></span>
      <span><?= $location ?></span>
    </div>
  </header>

  <div class="body">
    <aside class="sidebar">

      <div>
        <h2>Technical Skills</h2>
        <div class="tags">
          <span class="tag">Java</span>
          <span class="tag">Python</span>
          <span class="tag">C++</span>
          <span class="tag">SQL</span>
          <span class="tag">Arduino</span>
        </div>
      </div>

      <div>
        <h2>Soft Skills</h2>
        <ul>
          <li>Time Management</li>
          <li>Creativity</li>
          <li>Adaptability</li>
          <li>Communication</li>
        </ul>
      </div>

      <div>
        <h2>Languages</h2>
        <ul>
          <li>English</li>
          <li>Filipino</li>
        </ul>
      </div>

      <div>
        <h2>Education</h2>
        <div class="edu">
          <p class="edu-deg">BS IT – Cybersecurity</p>
          <p class="edu-school">FEU Institute of Technology</p>
          <p class="edu-year">2024 – Present</p>
        </div>
        <div class="edu">
          <p class="edu-deg">STEM – Robotics</p>
          <p class="edu-school">Lyceum of the Philippines Univ. – Manila</p>
          <p class="edu-year">2022 – 2024</p>
        </div>
      </div>

    </aside>

    <main class="main">

      <div>
        <h2>Profile</h2>
        <p class="profile"><?= $profile ?></p>
      </div>

      <div>
        <h2>Experience</h2>
        <div class="exp-head">
          <span class="exp-role">IT Intern</span>
          <span class="exp-date">January 2024</span>
        </div>
        <p class="exp-place">GK College · Mandaluyong</p>
        <ul>
          <li>Completed 80 hours of internship</li>
          <li>Diagnosed and resolved technical issues</li>
          <li>Collaborated within a cross-functional team</li>
        </ul>
      </div>

      <div>
        <h2>Certifications</h2>
        <div class="cert"><span class="cert-dot"></span><div><p class="cert-name">IT Specialist – Java</p><p class="cert-date">November 2025</p></div></div>
        <div class="cert"><span class="cert-dot"></span><div><p class="cert-name">IT Specialist – Databases</p><p class="cert-date">November 2025</p></div></div>
        <div class="cert"><span class="cert-dot"></span><div><p class="cert-name">IT Specialist – Python</p><p class="cert-date">March 2026</p></div></div>
      </div>

    </main>
  </div>

  <footer>
    <a href="mailto:<?= $email ?>">✉ <?= $email ?></a>
    <span>|</span>
    <span> <?= $phone ?></span>
    <span>|</span>
    <span> <?= $location ?></span>
  </footer>

</div>
</body>
</html>
