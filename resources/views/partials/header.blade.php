<!DOCTYPE html>
<html lang="en">


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('./assets/logo/logo.png') }}">

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <style>
    /* ------------ CONFIG: change this value if you want different panel height */
    :root {
      --mega-height: 480px;

    }

    /* ===============================
   MEGA MENU BASE STYLES (fixed panel)
   =============================== */

    li.special {
      position: relative;
    }

    /* hidden by default - panel now has a fixed height */
    .mega {
      display: none;
      position: absolute;
      left: 0;
      top: 100%;
      margin-top: 12px;
      background: #ffffff;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      border: 1px solid #e6e6e6;
      border-radius: 10px;
      padding: 20px 28px;
      /* slightly smaller vertical padding to fit height */
      z-index: 9999;
      width: 950px;
      box-sizing: border-box;

      /* new: fixed height so panel doesn't resize — only Procedures scrolls */
      height: var(--mega-height);
      align-items: flex-start;
      /* keep column headers at top */
    }

    /* show on hover (desktop) */
    li.special:hover>.mega,
    li.special:focus-within>.mega {
      display: flex !important;
    }

    /* when toggled by JS on mobile */
    li.special.open>.mega {
      display: flex !important;
    }

    /* column layout - ensure columns do not stretch vertically */
    .mega .col {
      width: 33.333%;
      padding-right: 20px;
      box-sizing: border-box;
      overflow: visible;
      /* important: content can flow, but not create extra scroll for panel */
    }

    /* keep headings pinned at the top of their column */
    .mega .col h3 {
      margin-top: 0;
      margin-bottom: 12px;
      flex: 0 0 auto;
    }

    /* ===============================
   PROCEDURES: make ONLY the list scrollable
   =============================== */

    /* target the UL inside the procedures column to control scroll */
    .mega .col-middle>ul {
      /* calculate available space: panel height minus vertical paddings and header height
     If your h3 or padding sizes differ, tweak the calc() numbers accordingly. */
      max-height: calc(var(--mega-height) - 80px);
      /* 80px is a safe estimate for top padding + heading + bottom padding */
      overflow-y: auto;
      padding-right: 8px;
      margin: 0;
      box-sizing: border-box;
    }

    /* keep the Procedures column container from creating its own scroll */
    .mega .col-middle {
      display: flex;
      flex-direction: column;
    }

    /* ensure other columns flow naturally and don't produce internal scrollbars */
    .mega .col:not(.col-middle) ul {
      max-height: calc(var(--mega-height) - 40px);
      overflow: visible;
    }

    /* ===============================
   SLIM + DARK SCROLLBAR (WebKit + Firefox)
   =============================== */

    /* Webkit browsers */
    .mega .col-middle>ul::-webkit-scrollbar {
      width: 4px !important;
    }

    .mega .col-middle>ul::-webkit-scrollbar-track {
      background: transparent !important;
    }

    .mega .col-middle>ul::-webkit-scrollbar-thumb {
      background: #222 !important;
      border-radius: 10px !important;
    }

    .mega .col-middle>ul::-webkit-scrollbar-thumb:hover {
      background: #000 !important;
    }


    nav {
      position: relative;
      z-index: 10000;
    }


    /* Firefox */
    .mega .col-middle>ul {
      scrollbar-width: thin !important;
      scrollbar-color: #222 transparent !important;
    }

    /* Safety: ensure the UL is scrollable in case something else changed overflow */
    .mega .col-middle>ul {
      overflow-y: auto !important;
    }

    /* ===============================
   RESPONSIVE (mobile) - panel becomes stacked & natural height
   =============================== */

    @media (max-width: 767px) {
      .mega {
        position: static;
        width: 100%;
        margin-top: 8px;
        border-radius: 8px;
        display: none;
        flex-direction: column;
        height: auto;
        /* allow height to grow on mobile */
        padding: 16px;
      }

      .mega .col {
        width: 100%;
        padding-right: 0;
      }

      /* on mobile let each UL have its own limited height if desired */
      .mega .col-middle>ul {
        max-height: 220px;
      }
    }


    /* ===============================
   HOSPITAL FACILITIES MEGA
   =============================== */

    .facility-mega {
      display: none;
      position: absolute;
      left: 0;
      top: 100%;
      right: 0;
      transform: translateX(-8rem);
      margin-top: 5px;
      width: 1100px;
      background: #fff;
      border: 1px solid #e5e5e5;
      border-radius: 8px;
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.12);
      padding: 18px 20px;
      z-index: 9999;
    }

    .facility:hover .facility-mega {
      display: block;
    }

    .facility-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 18px;
    }

    .facility-grid ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .facility-grid li {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      color: #333;
      padding: 6px 0;
      cursor: pointer;
    }

    .facility-grid li img {
      width: 16px;
      height: 16px;
      opacity: 0.7;
    }

    .facility-grid li:hover {
      color: #e11d48;
    }

    .facility-grid li:hover img {
      opacity: 1;
    }

    /* ===============================
   SPECIALITIES MEGA (DESKTOP)
   =============================== */

    .mega-specialities {
      display: none;
      position: absolute;
      height: auto !important;
      min-height: unset !important;
      align-items: flex-start;
      top: 100%;
      right: 0;
      transform: translateX(-20rem);


      right: 0;
      margin-top: 12px;
      width: 1050px;
      background: #fff;
      border-radius: 12px;
      padding: 12px 18px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
      border: 1px solid #e6e6e6;
      gap: 28px;
    }

    /* show on hover */
    li.special:hover .mega-specialities {
      display: flex;
    }

    .mega-col {
      list-style: none;
      padding: 0;
      margin: 0;
      width: 30%;
    }

    .mega-col li {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 10px 0;
      font-size: 14px;
      color: #6b6b6b;
      cursor: pointer;
      white-space: nowrap;
    }

    .mega-col li img {
      width: 18px;
      height: 18px;
      opacity: 0.7;
    }

    .mega-col li span {
      margin-left: auto;
      color: #9a9a9a;
    }

    /* hover */
    .mega-col li:hover {
      color: #e11d48;
    }

    .mega-col li:hover img {
      opacity: 1;
    }

    .mega-col li:hover span {
      color: #e11d48;
    }

    /* disable on mobile */
    @media (max-width: 767px) {
      .mega-specialities {
        display: none !important;
      }
    }


    /* hide extra items */
    .condition-col .view-more {
      display: block;
      /* break out of flex row behavior */
      margin-top: 8px;
      margin-left: 0;
      /* force left alignment */
      padding-left: 0;
      text-align: left;

      font-size: 13px;
      color: #e11d48;
      cursor: pointer;
      font-weight: 500;
    }

    /* Ensure icons do NOT affect View More */
    .condition-col .view-more img {
      display: none;
    }

    .mega-conditions {
      transform: translateX(-35rem);
      /* increase value to move more LEFT */
    }

    .mega-packages {
      transform: translateX(-45rem);
      /* increase value to move more LEFT */
    }
  </style>








  <nav class="fixed top-0 left-0 w-full ">

    <!-- ================= TOP GREY BAR ================= -->
    <div class="hidden min-[1200px]:block w-full bg-[#e2e2e2]">
      <div class="max-w-[1400px] mx-auto px-6">
        <div class="flex items-center justify-center h-10  text-sm text-gray-600">
          <ul class="hidden md:flex items-center gap-6">
            <li class="relative facility">
              <a href="#" class="flex items-center gap-1">
                Hospital Facilities
                <span>▾</span>
              </a>

              <!-- FACILITIES MEGA -->
              <div class="facility-mega">
                <div class="facility-grid">

                  <!-- COLUMN 1 -->
                  <ul>
                    <a href="./twenty-four-seven-services.php">
                      <li><img src="./assets/icons/emergency.svg">24x7 Emergency</li>
                    </a>
                    <a href="./ct-scan.php">
                      <li><img src="./assets/icons/ct.svg">CT Scan</li>
                    </a>
                    <a href="./mri-scan.php">
                      <li><img src="./assets/icons/mri.svg">MRI Scan</li>
                    </a>
                    <a href="./dialysis.php"></a>
                    <li><img src="./assets/icons/pharmacy.svg">24x7 Dialysis</li>
                    <a href="./icu.php">
                      <li><img src="./assets/icons/icu.svg"> ICU</li>
                    </a>
                  </ul>

                  <!-- COLUMN 2 -->
                  <ul>
                    <a href="./labour-room.php">
                      <li><img src="./assets/icons/icu.svg">Labour Room</li>
                    </a>
                    <a href="./echocardiography.php">
                      <li><img src="./assets/icons/arthroscopy.svg">2D Echocardiography </li>
                    </a>
                    <a href="./advanced-labrotory.php">
                      <li><img src="./assets/icons/arthroscopy.svg">Advanced Laboratory Services</li>
                    </a>

                    <li><img src="./assets/icons/labour.svg">Labour Suite</li>
                    <li><img src="./assets/icons/lab.svg">Advanced Lab</li>
                    <li><img src="./assets/icons/echo.svg">2D Echo</li>
                  </ul>

                  <!-- COLUMN 3 -->
                  <ul>
                    <li><img src="./assets/icons/endoscopy.svg">Endoscopy</li>
                    <li><img src="./assets/icons/eeg.svg">EEG</li>
                    <li><img src="./assets/icons/ecg.svg">ECG</li>
                    <li><img src="./assets/icons/image.svg">Image Intensifier</li>
                    <li><img src="./assets/icons/urology.svg">TURP / Urology OT</li>
                    <li><img src="./assets/icons/neonatal.svg">Neonatal Resuscitation</li>
                  </ul>

                  <!-- COLUMN 4 -->
                  <ul>
                    <li><img src="./assets/icons/laparoscopy.svg">Laparoscopy</li>
                    <li><img src="./assets/icons/pft.svg">PFT</li>
                    <li><img src="./assets/icons/ultrasound.svg">Ultrasound</li>
                    <li><img src="./assets/icons/stimwell.svg">Stimwell</li>
                    <li><img src="./assets/icons/bronchoscopy.svg">Bronchoscopy</li>
                    <li><img src="./assets/icons/recovery.svg">Post-operative Recovery Units</li>
                  </ul>

                  <!-- COLUMN 5 -->
                  <ul>
                    <li><img src="./assets/icons/tmt.svg">TMT / Cardiac Stress Test</li>
                    <li><img src="./assets/icons/abi.svg">Ankle-Brachial Index</li>
                    <li><img src="./assets/icons/idd.svg">IDD – Intervertebral Disc Dynamics</li>
                    <li><img src="./assets/icons/laser.svg">Bioflex Laser</li>
                    <li><img src="./assets/icons/pedoscan.svg">Footscan (Pedoscan)</li>
                    <li><img src="./assets/icons/nabh.svg">NABH / Quality & Compliance</li>
                  </ul>

                </div>
              </div>
            </li>


            <li><a href="./second-opinion.php">Second Opinion</a></li>
            <li><a href="./international-patients.php">International Patients</a></li>
            <li><a href="./careers.php">Careers</a></li>
            <li><a href="./news-media.php">News & Awards</a></li>
            <li class="relative group">
              <a href="javascript:void(0)"
                class="flex items-center gap-1">
                Health Corner
                <span class="text-xs">▾</span>
              </a>

              <!-- Desktop Dropdown -->
              <ul
                class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded-md
           shadow-lg opacity-0 invisible
           group-hover:opacity-100 group-hover:visible
           transition-all duration-200 z-[9999]">
                <li>
                  <a href="./blogs.php" class="block px-4 py-2 hover:bg-gray-100">
                    Blogs
                  </a>
                </li>
                <li>
                  <a href="./patient-testimonials.php" class="block px-4 py-2 hover:bg-gray-100">
                    patient testimonials
                  </a>
                </li>
                <li>
                  <a href="./doctor-videos.php" class="block px-4 py-2 hover:bg-gray-100">
                    doctor videos
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </div>

    <!-- ================= WHITE MAIN BAR ================= -->
    <div class="w-full bg-white ">
      <div class="max-w-[1400px] mx-auto px-6">
        <div class="flex items-center justify-between h-[78px]">

          <!-- LOGO -->
          <div class="flex items-center gap-4">
            <a href="./">
              <img
                src="./assets/logo/logo.png"
                alt="Nano Hospitals"
                class="h-14 w-auto object-contain" />
            </a>

            <div class="relative inline-block lg:ml-10">
              <!-- Trigger Button -->
              <button
                id="hospitalDropdownBtn"
                type="button"
                class="border border-red-400 text-red-500 px-3 py-1.5 rounded-full text-xs font-medium
           flex items-center gap-1">
                Pick Hospital
                <span class="text-[10px]">▾</span>
              </button>

              <!-- Dropdown Menu -->
              <div
                id="hospitalDropdownMenu"
                class="absolute right-0 mt-2 w-44
           bg-white border border-gray-200 rounded-lg shadow-lg
           hidden z-50">
                <a
                  href="./hulimavu.php"
                  class="block px-4 py-2 text-sm text-gray-700
             hover:bg-red-50 hover:text-red-500">
                  <div class="flex justify-start gap-5"><img src="./assets/icons/Vector (4).png" alt="">
                    Hulimavu</div>
                </a>

                <a
                  href="./uttarahalli.php"
                  class="block px-4 py-2 text-sm text-gray-700
             hover:bg-red-50 hover:text-red-500">
                  <div class="flex justify-start gap-5"><img src="./assets/icons/Vector (4).png" alt="">
                    Uttarahalli</div>
                </a>
              </div>
            </div>

            <script>
              const btn = document.getElementById('hospitalDropdownBtn');
              const menu = document.getElementById('hospitalDropdownMenu');

              btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
              });

              // Close when clicking outside
              document.addEventListener('click', (e) => {
                if (!btn.contains(e.target) && !menu.contains(e.target)) {
                  menu.classList.add('hidden');
                }
              });
            </script>

          </div>

          <!-- MAIN MENU -->
          <ul class="hidden min-[1200px]:flex items-center gap-8 text-sm font-medium text-gray-800">

            <li><a href="./doctor-profile.php">Doctors </a></li>

            <li class="special relative">
              <a href="#" id="specialToggle" class="hover:text-red-500">
                Specialities
              </a>

              <div class="mega mega-specialities">

                <!-- COLUMN 1 -->
                <ul class="mega-col">
                  <a href="./bone-and-joint.php">
                    <li><i class="fa-solid fa-bone"></i> Bone & Joint Care</li>
                  </a>
                  <a href="./child-care.php">
                    <li><i class="fa-solid fa-baby"></i> Child Care</li>
                  </a>
                  <a href="./women-care.php">
                    <li><i class="fa-solid fa-person-dress"></i> Women’s Care</li>
                  </a>
                  <a href="./general-medicine.php">
                    <li><i class="fa-solid fa-stethoscope"></i> General Medicine</li>
                  </a>
                  <a href="./heart-care.php">
                    <li><i class="fa-regular fa-heart"></i> Heart Care</li>
                  </a>
                  <a href="./brain-care.php">
                    <li><i class="fa-solid fa-brain"></i> Brain & Spine Care</li>
                  </a>
                  <a href="./lung-care.php">
                    <li><i class="fa-solid fa-lungs"></i> Lung Care</li>
                  </a>
                </ul>

                <!-- COLUMN 2 -->
                <ul class="mega-col">
                  <a href="./kidney-care.php">
                    <li><i class="fa-solid fa-kidneys"></i> Kidney Care</li>
                  </a>
                  <a href="./kidney-care.php">
                    <li><i class="fa-solid fa-toilet"></i> Urology Care</li>
                  </a>
                  <a href="./digestive-care.php">
                    <li><i class="fa-solid fa-stomach"></i> Digestive Care</li>
                  </a>
                  <a href="./diabetes-harmone-care.php">
                    <li><i class="fa-solid fa-vial-circle-check"></i> Diabetes & Hormone Care</li>
                  </a>
                  <a href="./cancer-care.php">
                    <li><i class="fa-solid fa-ribbon"></i> Cancer Care</li>
                  </a>
                  <a href="./heart-care.php">
                    <li><i class="fa-solid fa-wave-square"></i> Vascular Care</li>
                  </a>
                  <a href="./skin-care.php">
                    <li><i class="fa-solid fa-hand-dots"></i> Skin Care</li>
                  </a>

                </ul>

                <!-- COLUMN 3 -->
                <ul class="mega-col">
                  <a href="./eye-care.php">
                    <li><i class="fa-regular fa-eye"></i> Eye Care</li>
                  </a>
                  <a href="./ent-care.php">
                    <li><i class="fa-solid fa-ear-listen"></i> ENT Care</li>
                  </a>
                  <a href="./mental-health.php">
                    <li><i class="fa-solid fa-head-side-virus"></i> Mental Health & Mind Care</li>
                  </a>
                  <a href="./rhemetology.php">
                    <li><i class="fa-solid fa-joint"></i> Rheumatology</li>
                  </a>
                  <a href="./plastic-reconstructive-care.php">
                    <li><i class="fa-solid fa-fire-flame-simple"></i> Plastic, Reconstructive & Burn Care</li>
                  </a>
                  <a href="./oral-facial-surgery.php">
                    <li><i class="fa-solid fa-teeth"></i> Oral & Facial Surgery</li>
                  </a>

                </ul>

                <!-- COLUMN 4 -->
                <ul class="mega-col">
                  <a href="./general-surgery.php">
                    <li><i class="fa-solid fa-scalpel"></i> General Surgery</li>
                  </a>
                  <a href="./emergency-care.php">
                    <li><i class="fa-solid fa-truck-medical"></i> Emergency & Critical Care</li>
                  </a>
                  <a href="./rehabilitation.php">
                    <li><i class="fa-solid fa-person-walking"></i> Rehabilitation & Physiotherapy</li>
                  </a>
                  <a href="./elder-care.php">
                    <li><i class="fa-solid fa-person-cane"></i> Elder Care</li>
                  </a>
                  <a href="./radiology.php">
                    <li><i class="fa-solid fa-x-ray"></i> Radiology & Imaging</li>
                  </a>
                  <a href="./labrotory-diagnostic-services.php">
                    <li><i class="fa-solid fa-flask-vial"></i> Laboratory & Diagnostic Services</li>
                  </a>

                </ul>

              </div>


            </li>

            <li><a href="#">Procedures </a></li>
            <li class="special relative">
              <a href="#" class="hover:text-red-500">
                Conditions
              </a>

              <div class="mega mega-specialities mega-conditions">

                <!-- COLUMN 1 : CARDIO / METABOLIC -->
                <ul class="mega-col condition-col">
                  <li><i class="fa-solid fa-heart-pulse"></i> Hypertension</li>
                  <li><i class="fa-solid fa-vial-circle-check"></i> Diabetes</li>
                  <li><i class="fa-solid fa-heart"></i> Heart Disease</li>
                  <li><i class="fa-solid fa-brain"></i> Stroke</li>

                  <li class="more-item"><i class="fa-solid fa-flask"></i> High Cholesterol</li>
                  <li class="more-item"><i class="fa-solid fa-weight-scale"></i> Obesity</li>

                  <li class="view-more">View More</li>
                </ul>

                <!-- COLUMN 2 : RESPIRATORY -->
                <ul class="mega-col condition-col">
                  <li><i class="fa-solid fa-lungs"></i> Asthma</li>
                  <li><i class="fa-solid fa-lungs"></i> COPD / Chronic Bronchitis</li>
                  <li><i class="fa-solid fa-virus"></i> Pneumonia</li>
                  <li><i class="fa-solid fa-bacteria"></i> Tuberculosis</li>

                  <li class="more-item"><i class="fa-solid fa-lungs-virus"></i> Respiratory Infections</li>

                  <li class="view-more">View More</li>
                </ul>

                <!-- COLUMN 3 : INFECTIONS -->
                <ul class="mega-col condition-col">
                  <li><i class="fa-solid fa-virus"></i> Viral Fever</li>
                  <li><i class="fa-solid fa-virus"></i> Dengue</li>
                  <li><i class="fa-solid fa-virus"></i> Malaria</li>
                  <li><i class="fa-solid fa-virus"></i> Typhoid</li>

                  <li class="more-item"><i class="fa-solid fa-bacteria"></i> Urinary Tract Infection</li>

                  <li class="view-more">View More</li>
                </ul>

                <!-- COLUMN 5 : CANCER / BLOOD -->
                <ul class="mega-col condition-col">
                  <li><i class="fa-solid fa-ribbon"></i> Breast Cancer</li>
                  <li><i class="fa-solid fa-ribbon"></i> Lung Cancer</li>
                  <li><i class="fa-solid fa-ribbon"></i> Colorectal Cancer</li>
                  <li><i class="fa-solid fa-ribbon"></i> Cervical Cancer</li>

                  <li class="more-item"><i class="fa-solid fa-droplet"></i> Anaemia</li>

                  <li class="view-more">View More</li>
                </ul>

              </div>

            </li>

            <li class="special relative">
              <a href="#" class="hover:text-red-500">
                health packages
              </a>

              <div class="mega mega-specialities mega-packages">

                <!-- COLUMN 1 -->
                <ul class="mega-col condition-col">
                  <li>
                    <a href="./basic-package.php">
                      <i class="fa-solid fa-clipboard-check"></i>
                      Basic Health Package
                    </a>
                  </li>

                  <li>
                    <a href="./pre-employment.php">
                      <i class="fa-solid fa-user-check"></i>
                      Pre Employment Package
                    </a>
                  </li>

                  <li>
                    <a href="./master-health-package.php">
                      <i class="fa-solid fa-file-medical"></i>
                      Master Health Package
                    </a>
                  </li>
                </ul>

                <!-- COLUMN 2 -->
                <ul class="mega-col condition-col">
                  <li>
                    <a href="./master-health-package.php">
                      <i class="fa-solid fa-user-tie"></i>
                      Executive Health Package
                    </a>
                  </li>

                  <li>
                    <a href="./diabetic-health-package.php">
                      <i class="fa-solid fa-vial-circle-check"></i>
                      Diabetic Package
                    </a>
                  </li>

                  <li>
                    <a href="./diabetic-health-package.php">
                      <i class="fa-solid fa-person-cane"></i>
                      Senior Citizen Package
                    </a>
                  </li>
                </ul>

                <!-- COLUMN 3 -->
                <ul class="mega-col condition-col">
                  <li>
                    <a href="./master-health-package.php">
                      <i class="fa-solid fa-heart-pulse"></i>
                      Healthy Heart Package
                    </a>
                  </li>

                  <li>
                    <a href="./diabetic-health-package.php">
                      <i class="fa-solid fa-vial-circle-check"></i>
                      Diabetic Package
                    </a>
                  </li>

                  <li>
                    <a href="./diabetic-health-package.php">
                      <i class="fa-solid fa-person-cane"></i>
                      Senior Citizen Package
                    </a>
                  </li>
                </ul>

                <!-- COLUMN 5 -->
                <ul class="mega-col condition-col">
                  <li>
                    <a href="./cancer-pacakge.php">
                      <i class="fa-solid fa-ribbon"></i>
                      Cancer Package
                    </a>
                  </li>

                  <li>
                    <a href="./fitness-package.php">
                      <i class="fa-solid fa-dumbbell"></i>
                      Fitness Package
                    </a>
                  </li>

                  <li>
                    <a href="./fertility-package.php">
                      <i class="fa-solid fa-seedling"></i>
                      Fertility Package
                    </a>
                  </li>
                </ul>

              </div>

            </li>
          </ul>

          <!-- CTA -->
          <div class="hidden md:flex items-center gap-3">
            <a
              href="https://nanohospitals.karexpert.com/account-management/login"
              class="bg-red-500 text-white px-5 py-2 rounded-full text-sm font-semibold">
              Book Appointment
            </a>

            <a
              href="tel:1800123456"
              class="border border-red-500 text-red-500 px-4 py-2 rounded-full text-sm font-semibold">
              Call Us
            </a>
          </div>

          <!-- MOBILE TOGGLE -->
          <button
            id="openMobileMenu"
            class="min-[1300px]:hidden p-2 text-red-600 text-xl">
            ☰
          </button>


        </div>
      </div>
    </div>

    <!-- ================= MOBILE MENU ================= -->
    <!-- ================= MOBILE OVERLAY MENU ================= -->
    <!-- ================= MOBILE OVERLAY MENU ================= -->




  </nav>



  <div id="mobileMenuOverlay"
    class="fixed inset-0 bg-white z-[20000] hidden flex flex-col overflow-hidden">

    <!-- HEADER (FIXED HEIGHT) -->
    <div class="flex items-center justify-between px-5 py-4 border-b shrink-0">
      <a href="./"><img src="./assets/logo/logo.png" alt="Nano Hospitals" class="h-8"></a>
      <button id="closeMobileMenu" class="text-2xl font-light">✕</button>
    </div>

    <!-- SCROLLABLE CONTENT -->
    <div class="flex-1 overflow-y-auto">

      <!-- ICON GRID -->
      <div class="px-6 py-6">
        <div class="grid grid-cols-3 gap-y-6 gap-x-4 text-center text-xs text-gray-700">

          <a href="./doctor-profile.php">
            <div class="flex flex-col items-center gap-2">
              <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center">
                <img src="./assets/icons/doctor.png" class="w-6">
              </div>
              Doctors
            </div>
          </a>

          <a href="./specialties.php">
            <div class="flex flex-col items-center gap-2">
              <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center">
                <img src="./assets/icons/24-hours.png" class="w-6">
              </div>
              Specialities
            </div>
          </a>

          <a href="#">
            <div class="flex flex-col items-center gap-2">
              <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center">
                <img src="./assets/icons/specialities.png" class="w-6">
              </div>
              Procedures
            </div>
          </a>

          <a href="#">
            <div class="flex flex-col items-center gap-2">
              <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center">
                <img src="./assets/icons/knife (2).png" class="w-6">
              </div>
              Conditions
            </div>
          </a>

          <a href="./health-packages.php">
            <div class="flex flex-col items-center gap-2">
              <div class="w-14 h-14 rounded-full bg-gray-200 flex items-center justify-center">
                <img src="./assets/icons/health-packages.png" class="w-6">
              </div>
              Health Packages
            </div>
          </a>

        </div>
      </div>

      <!-- DIVIDER -->
      <div class="border-t"></div>

      <!-- LIST LINKS -->
      <ul class="px-3 py-4 text-sm text-gray-800 divide-y">

        <li>
          <a href="./health-facilities.php"
            class="flex items-center justify-between py-4 hover:text-red-600 transition">
            <div class="flex items-center gap-3">
              <i class="fa-regular fa-hospital text-gray-400 w-5"></i>
              <span>Hospital Facilities</span>
            </div>
            <i class="fa-solid fa-chevron-right text-gray-300 text-xs"></i>
          </a>
        </li>

        <li>
          <a href="./second-opinion.php"
            class="flex items-center justify-between py-4 hover:text-red-600 transition">
            <div class="flex items-center gap-3">
              <i class="fa-regular fa-comments text-gray-400 w-5"></i>
              <span>Second Opinion</span>
            </div>
            <i class="fa-solid fa-chevron-right text-gray-300 text-xs"></i>
          </a>
        </li>

        <li>
          <a href="./international-patients.php"
            class="flex items-center justify-between py-4 hover:text-red-600 transition">
            <div class="flex items-center gap-3">
              <i class="fa-regular fa-globe text-gray-400 w-5"></i>
              <span>International Patients</span>
            </div>
            <i class="fa-solid fa-chevron-right text-gray-300 text-xs"></i>
          </a>
        </li>

        <li>
          <a href="./careers.php"
            class="flex items-center justify-between py-4 hover:text-red-600 transition">
            <div class="flex items-center gap-3">
              <i class="fa-regular fa-briefcase text-gray-400 w-5"></i>
              <span>Careers</span>
            </div>
            <i class="fa-solid fa-chevron-right text-gray-300 text-xs"></i>
          </a>
        </li>

        <li>
          <a href="./news-awards.php"
            class="flex items-center justify-between py-4 hover:text-red-600 transition">
            <div class="flex items-center gap-3">
              <i class="fa-regular fa-newspaper text-gray-400 w-5"></i>
              <span>News and Awards</span>
            </div>
            <i class="fa-solid fa-chevron-right text-gray-300 text-xs"></i>
          </a>
        </li>

        <li>
          <a href="./health-corner.php"
            class="flex items-center justify-between py-4 hover:text-red-600 transition">
            <div class="flex items-center gap-3">
              <i class="fa-regular fa-heart text-gray-400 w-5"></i>
              <span>Health Corner</span>
            </div>
            <i class="fa-solid fa-chevron-right text-gray-300 text-xs"></i>
          </a>
        </li>

      </ul>


    </div>
  </div>








</body>
<script>
  const openBtn = document.getElementById('openMobileMenu');
  const closeBtn = document.getElementById('closeMobileMenu');
  const mobileMenu = document.getElementById('mobileMenuOverlay');

  openBtn?.addEventListener('click', () => {
    mobileMenu.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  });

  closeBtn?.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
    document.body.style.overflow = '';
  });
</script>


<script>
  (function() {
    const li = document.querySelector('li.special');
    const toggle = document.getElementById('specialToggle');
    const mega = document.getElementById('megaMenu');
    if (!mega) return;

    mega.setAttribute('data-open', 'false');
    // allow click/tap to toggle (useful on mobile where hover isn't available)
    toggle.addEventListener('click', function(e) {
      // prevent default only on touch/click toggling; keep links functional if you change to <a href="...">
      e.preventDefault();
      const isOpen = li.classList.toggle('open');
      mega.setAttribute('aria-hidden', !isOpen);
    });

    // close when clicking outside
    document.addEventListener('click', function(e) {
      if (!li.contains(e.target)) {
        li.classList.remove('open');
        mega.setAttribute('aria-hidden', 'true');
      }
    });

    // close on Escape
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        li.classList.remove('open');
        mega.setAttribute('aria-hidden', 'true');
      }
    });
  })();
</script>
<script>
  (function() {
    const css = `
/* High-specificity selector to avoid Tailwind overrides */
nav li.special .mega .col-middle::-webkit-scrollbar { width: 4px !important; }
nav li.special .mega .col-middle::-webkit-scrollbar-track { background: transparent !important; }
nav li.special .mega .col-middle::-webkit-scrollbar-thumb { background: #222 !important; border-radius: 10px !important; }
nav li.special .mega .col-middle::-webkit-scrollbar-thumb:hover { background: #000 !important; }

/* Firefox */
nav li.special .mega .col-middle { scrollbar-width: thin !important; scrollbar-color: #222 transparent !important; }

/* Safety: ensure .mega is not set to overflow hidden accidentally */
nav li.special .mega .col-middle { overflow-y: auto !important; }

/* If your .col-middle isn't nested exactly like that, also target a bit more generally */
.mega .col-middle::-webkit-scrollbar { width: 4px !important; }
.mega .col-middle::-webkit-scrollbar-track { background: transparent !important; }
.mega .col-middle::-webkit-scrollbar-thumb { background: #222 !important; border-radius: 10px !important; }
.mega .col-middle { scrollbar-width: thin !important; scrollbar-color: #222 transparent !important; overflow-y: auto !important; }
  `;

    const st = document.createElement('style');
    st.setAttribute('data-injected', 'mega-scrollbar-fix');
    st.appendChild(document.createTextNode(css));
    document.head.appendChild(st);
  })();
</script>

<script>
  document.querySelectorAll('.condition-col .view-more').forEach(btn => {
    btn.addEventListener('click', function() {
      this.closest('.condition-col').classList.add('expanded');
    });
  });
</script>


