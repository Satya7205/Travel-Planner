<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist Venues</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/fevicon.png" type="image/x-icon">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="loginnew.html"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                    <a href="loginnew.html"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Dashboard</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                            <!-- <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a> -->
                            <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
              <h1  class="m-0"><i class="fas fa-route me-3"></i></h1>
              <!-- <img src="img/tp.png" alt="Logo" style="max-width: 900px" /> -->
              </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <!-- <a href="gallery.html" class="nav-item nav-link">Gallery</a> -->
                    <!-- <a href="packages.html" class="nav-item nav-link">Packages</a> -->
                    <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <!-- <a href="destination.html" class="dropdown-item">Destination</a> -->
                            <a href="tour.html" class="dropdown-item">Explore Tour</a>
                            <a href="booking.html" class="dropdown-item">Travel Booking</a>
                            <!-- <a href="gallery.html" class="dropdown-item">Our Gallery</a> -->
                            <a href="guides.html" class="dropdown-item">Travel Guides</a>
                            <!-- <a href="testimonial.html" class="dropdown-item">Testimonial</a> -->
                            <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
                        </div>
                    </div>
                    <a href="gallery.html" class="nav-item nav-link">Gallery</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="booking.html" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
            </div>
        </nav>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Online Booking</h1>
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-white">Online Booking</li>
                    </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- Tour Booking Start -->
        <div class="container-fluid booking py-5">
          <div class="container py-5">
            <div class="row g-5 align-items-center">
              <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">Booking</h5>
                <h1 class="text-white mb-4">Online Booking</h1>
                <p class="text-white mb-4">
                  Welcome to Tourist Venues, your ultimate destination for
                  hassle-free travel booking! Our user-friendly interface offers a
                  seamless experience, allowing you to effortlessly plan and book
                  your dream vacation.
                </p>
                <p class="text-white mb-4">
                  Manage your travel itinerary with ease, from flight schedules to
                  hotel reservations and activities, all conveniently accessible in
                  one place. Our responsive design ensures a seamless experience
                  across all devices, so you can book your travel anytime, anywhere.
                </p>
                <!-- <a
                  href="#"
                  class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2"
                  >Read More</a
                > -->
              </div>
              <div class="col-lg-6">
                <h1 class="text-white mb-3">Book A Tour Guide</h1>
                <p class="text-white mb-4">
                  Get <span class="text-warning">50% Off</span> On Your First
                  Adventure Trip With Us. Get More Deal Offers Here.
                </p>
                <form action="http://127.0.0.1/touristvenues/payment/pay.php" method="post">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input
                          type="text"
                          name="customername"
                          class="form-control bg-white border-0"
                          id="name"
                          placeholder="name" 
                         
                        />
                        <label for="name">Name</label>
                      </div>
                    </div>
                    <!-- <div class="col-md-6">
                      <div class="form-floating">
                        <input
                        
                          type="email"
                          class="form-control bg-white border-0"
                          id="email"
                          placeholder="Your Email"
                          required
                        />
                        <label for="email">Your Email</label>
                      </div>
                    </div> -->
                    <div class="col-md-6">
                      <div class="form-floating" >
                        <select class="form-select bg-white border-0" id="select1" name="destination" required >
                          <option value="0">Choose a Destination</option>
                          <option value="1">SAILA SRIKHETRA</option>
                          <option value="2">TIKARPADA WILDLIFE SANCTUARY</option>
                          <option value="3">MAA HINGULA TEMPLE</option>
                          <option value="4">SATAKOSIA TIGER RESERVE</option>
                          <option value="5">SURESWARI WATERFALL</option>
                          <option value="6">JOGINDRA VILLA PALACE</option>
                          <option value="7">NAYAKPADA CAVE</option>
                          <option value="8">PADMATOLA SANCTUARY</option>
                          <option value="9">CHARISAMBHU TEMPLE</option>
                          <option value="10">CHANDI TEMPLE</option>
                          <option value="11">GANDHAMARDAN HILLS</option>
                          <option value="12"> HARISHANKAR TEMPLE</option>
                          <option value="13">TUREKELA WILDLIFE SANCTUARY</option>
                          <option value="14">SAILASHREE PALACE</option>
                          <option value="15">PATANESWARI TEMPLE</option>
                          <option value="16">AAPKHOL WATERFALLS</option>
                          <option value="17">BARABAKHARA WATERFALL & CAVE</option>
                          <option value="18">SHYAMA KALI TEMPLE</option>
                          <option value="19">PATHARSENI TEMPLE</option>
                          <option value="20">SWAPNESWAR TEMPLE</option>
                          <option value="21">CHANDIPUR BEACH</option>
                          <option value="22">KHIRACHORA TEMPLE</option>
                          <option value="23">EMAMI JAGANNATH TEMPLE</option>
                          <option value="24">PANCHALINGESWAR TEMPLE</option>
                          <option value="25">KULDIHA WILDLIFE SANCTUARY</option>
                          <option value="26">DHAMARAI TEMPLE</option>
                          <option value="27">MAA BHADRAKALI TEMPLE</option>
                          <option value="28">AKHANDALAMANI TEMLPLE</option>
                          <option value="29">RAKTATIRTHA</option>
                          <option value="30">DHAMRA PORT</option>
                          <option value="31">BARABATI FORT</option>
                          <option value="32">MAA CUTTACK CHANDI TEMPLE</option>
                          <option value="33">MAHANADI RIVER  BEACH</option>
                          <option value="34">LALITGIRI BUDDHIST COMPLEX</option>
                          <option value="35">NETAJI BIRTH PLACE MUSEUM</option>
                          <option value="36">PRADHANPAT WATERFALL</option>
                          <option value="37">DEOGARH RAJBATI PALACE</option>
                          <option value="38">AKSHARSHILA ROCK</option>
                          <option value="39">KALAJIRA DAM</option>
                          <option value="40">KATASAR GHAT SHIVA TEMPLE</option>
                          <option value="41">KAPILASH MAHADEV TEMPLE</option>
                          <option value="42">LORD VISHNU ANANTASAYANA</option>
                          <option value="43">ASTASHAMBHU TEMPLE</option>
                          <option value="44">SAPTASAJYA HILL</option>
                          <option value="45">SAPUA DAM</option>
                          <option value="46">TARATARINI TMPLE</option>
                          <option value="47">TARATARINI TMPLE</option>
                          <option value="48">RAMBHA LAKE & BIRD ISLAND</option>
                          <option value="49">GOPALPUR BEACH</option>
                          <option value="50">JAUGADA FORT</option>
                          <option value="51">ARYAPALLI MARINE BEACH</option>
                          <option value="52">GAJAPATI PALACE</option>
                          <option value="53">PADMASAMBHAVA STATUE</option>
                          <option value="54">MAHENDRAGIRI HILL</option>
                          <option value="55">GANDAHATI WATERFALL</option>
                          <option value="56">BRUNDABAN PALACE</option>
                          <option value="57">RAM CHANDI TEMPLE</option>
                          <option value="58">JHADESWAR TEMPLE</option>
                          <option value="59">VIKRAMKHOL CAVE</option>
                          <option value="60">RAMPALUGA ISLAND</option>
                          <option value="61">KOILIGHUGHAR WATERFALL</option>
                          <option value="62">CHHATIA BATA TEMPLE</option>
                          <option value="63">BIRAJA TMEPLE</option>
                          <option value="64">RATNAGIRI MONASTERY</option>
                          <option value="65">OLASUNI TEMPLE</option>
                          <option value="66">ASHOKJHAR WATERFALL</option>
                          <option value="67">PARADEEP PORT</option>
                          <option value="68">SIALI SEA BEACH</option>
                          <option value="69">SARALA TEMPLE</option>
                          <option value="70">MARINE AQUARIUM</option>
                          <option value="71">GOBARDHANA PITHA,GAROI ASHRAM</option>
                          <option value="72">CHILIKA LAKE</option>
                          <option value="73">NANDANKANAN ZOOLOGICAL PARK</option>
                          <option value="74">LINGARAJ TEMPLE</option>
                          <option value="75">UDAYAGIRI AND KHANDAGIRI CAVES</option>
                          <option value="76">ODISHA STATE MUSEUM</option>
                          <option value="77">TARINI TEMPLE</option>
                          <option value="78">SANAGHAGARA & BADAGHAGARA WATERFALLS</option>
                          <option value="79">GONASIKA TEMPLE</option>
                          <option value="80">KESHRI KUNDA</option>
                          <option value="81">KHANDADHAR WATERFALL</option>
                          <option value="82">ASURGARH FORT</option>
                          <option value="83">UMA MAHESWARI TEMPLE</option>
                          <option value="84">AMBAPANI SANCTUARY</option>
                          <option value="85">GUDAHANDI WATERFALL</option>
                          <option value="86">LANKHESWARI TEMPLE</option>
                          <option value="87">BUTTERFLY NATURE PARK</option>
                          <option value="88">DARINGBADI HILL STATION</option>
                          <option value="89">MANDASARU VALLEY NATURE CAMP</option>
                          <option value="90">BELGHAR NATURE CAMP</option>
                          <option value="91">MAA BARALA DEVI TEMPLE</option>
                          <option value="92">TRIBAL MUSEUM</option>
                          <option value="93">GUPTESWAR MAHADEEV TEMPLE</option>
                          <option value="94">DUDUMA WATERFALLS</option>
                          <option value="95">JAGANNATH SAGAR</option>
                          <option value="96">HANUMAN TEMPLE</option>
                          <option value="97">HUKITOLA ISLAND</option>
                          <option value="98">BHITARKANIKA NATIONAL PARK</option>
                          <option value="99">MAA GOJABAYANI TEMPLE</option>
                          <option value="100">RAJKANIKA PALACE</option>
                          <option value="101">PENTHA SEA BEACH</option>
                          <option value="102">BALIMELA RESERVOIR,CHITRAKONDA DAM</option>
                          <option value="103">KANGERGHATI NATIONAL PARK</option>
                          <option value="104">AMMAKUNDA WATERPARK</option>
                          <option value="105">BONDA HILL</option>
                          <option value="106">EKAGUDI WATERFALL</option>
                          <option value="107">JAGANNATH TEMPLE</option>
                          <option value="108">SIMILIPAL NATIONAL PARK</option>
                          <option value="109">DEVKUND AMBIKA TEMPLE</option>
                          <option value="110">BELGADIA PALACE</option>
                          <option value="111">SULAIPAT DAM & KHADAKHAI DAM</option>
                          <option value="112">DEER PARK</option>
                          <option value="113">BHANDARA GHARANI TEMPLE</option>
                          <option value="114">MANGARDORA TEMPLE</option>
                          <option value="115">HIRLI DONGRI HILL PARK</option>
                          <option value="116">PODAGADA</option>
                          <option value="117">KUTURI DEER PARK</option>
                          <option value="118">NILAMADHABA TEMPLE</option>
                          <option value="119">DAKHINAKALI TEMPLE</option>
                          <option value="120">MANINAGA TEMPLE</option>
                          <option value="121">BAISIPALLI WILDLIFE SANCTUARY</option>
                          <option value="122">TIKHALI DAM</option>
                          <option value="123">PATALGANGA SPRING</option>
                          <option value="124">YOGIMATH CAVES</option>
                          <option value="125">DADHIBABAN TEMPLE</option>
                          <option value="126">SUNABEDA WILDLIFE SANCTUARY</option>
                          <option value="127">GOLDEN BEACH</option>
                          <option value="128">SHREE JAGANNATH TEMPLE</option>
                          <option value="129">KONARK SUN TEMPLE</option>
                          <option value="130">RAMACHANDI TEMPLE</option>
                          <option value="131">SAKHIGOPAL TEMPLE</option>
                          <option value="132">DEVAGIRI HILL</option>
                          <option value="133">MAJHIGHARIANI TEMPLE</option>
                          <option value="134">PATALESHWAR SHIVA TEMPLE</option>
                          <option value="135">LAXMINARAYAN TEMPLE</option>
                          <option value="136">DURGAPADU WATERFALL</option>
                          <option value="137">HIRAKUD DAM</option>
                          <option value="138">SAMALESWARI TEMPLE</option>
                          <option value="139">DEBRIGARH WILDLIFE SANCTUARY</option>
                          <option value="140">HUMA TEMPLE</option>
                          <option value="141">HIRAKUD ROPEWAY</option>
                          <option value="142">PATALI SRIKHETRA</option>
                          <option value="143">SUBARNAMERU TEMPLE</option>
                          <option value="144">THENGO DAM</option>
                          <option value="145">KAPILESWAR TEMPLE</option>
                          <option value="146">SASHISENA TEMPLE</option>
                          <option value="147">VEDVYAS TEMPLE</option>
                          <option value="148">VAISHNNO DEVI TEMPLE</option>
                          <option value="149">HANUMAN VATIKA</option>
                          <option value="150">PITAMAHAL DAM</option>
                          <option value="151">TENSA HILL STATION</option>
                        </select>
                        <label for="select1">Destination</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div
                        class="form-floating date"
                        id="date3"
                        data-target-input="nearest" 
                      >

                        <input
                          type="date"
                          class="form-control bg-white border-0"
                          id="From Date"
                          name="startdate"
                          placeholder="From date"
                          data-target="#date3"
                          data-toggle="datetimepicker"
                          required
                        />
                        <label for="datetime">From date</label>
                      </div>
                    </div>
                   
                    <div class="col-md-6">
                      <div
                        class="form-floating date"
                        id="date3"
                        data-target-input="nearest"
                      >
                        <input
                          type="date"
                          class="form-control bg-white border-0"
                          id="datetime"
                          name="enddate"
                          placeholder="Date & Time"
                          data-target="#date3"
                          data-toggle="datetimepicker"
                          required
                        />
                        <label for="datetime">To Date</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating" >
                        <select class="form-select bg-white border-0" id="select1" name="guide" required >
                          <option value="0">Choose Your Guide</option>
                          <option value="1">Rajendra Sahoo-Balangir
                          </option>
                          <option value="2">Anupama Sahu
                            -Balangir</option>
                          <option value="3">Pradeep Kumar
                            -Balangir</option>
                          <option value="4">Swati Mishra
                            -Balangir</option>
                          <option value="5"> Suryakanta Moharan
                            -Balangir</option>
                          <option value="6">Anjan Kumar Manik-Baragada 
                          </option>
                          <option value="7">Prakash Chandra
                            -Baragada</option>
                          <option value="8">Biswajit Dash
                            -Baragada</option>
                          <option value="9">Bijay Kumar Jena
                            -Baragada</option>
                          <option value="10"> Aakas Kumar Sahoo
                            -Baragada</option>
                          <option value="11"> Gyan Ranjan Das
                            -Bhadrak</option>
                          <option value="12">Swaraj Das-Bhadrak
                          </option>
                          <option value="13">Aditya Das
                            -Bhadrak</option>
                          <option value="13">Annapurna Patnaik
                            -Bhadrak</option>
                          <option value="14">Anisha Pati
                            -Bhadrak</option>
                          <option value="15">Bhabani Chauhan
                            -Cuttack</option>
                          <option value="16">Bhikari Sahoo
                            -Cuttack</option>
                          <option value="17">Aakash Das
                            -Cuttack</option>
                          <option value="18">Suhana Sahu
                            -Cuttack</option>
                          <option value="19">Sweta Barik
                            -Cuttack</option>
                          <option value="20">Sunita Mohapatra
                            -Deogarh</option>
                          <option value="21">Sumitra Patra
                            -Deogarh</option>
                          <option value="22">Raghubara Das
                            -Deogarh</option>
                          <option value="23">Aakash Sahu
                            -Deogarh</option>
                          <option value="24">Raghunath Sahoo
                            -Deogarh</option>
                          <option value="25">Ashok Behera-Dhenkanal</option>
                          <option value="26">Priyanka Dash-Dhenkanal</option>
                          <option value="27">Santosh Pradhan-Dhenkanal</option>
                          <option value="28">Snigdha Mohanty-Dhenkanal</option>
                          <option value="29">Debendra Sahoo-Dhenkanal</option>
                          <option value="30">Leena Swain-Gajapati</option>
                          <option value="31">Sudhir Patra-Gajapati</option>
                          <option value="32">Rashmita Mohapatra-Gajapati</option>
                          <option value="33">Bhagirathi Nayak-Gajapati</option>
                          <option value="34">Snehalata Sahu-Gajapati</option>
                          <option value="35">Bikram Singh-Ganjam</option>
                          <option value="36">Deepika Dash-Ganjam</option>
                          <option value="37">Raghunath Nayak-Ganjam</option>
                          <option value="38">Shweta Panda-Ganjam</option>
                          <option value="39">Gopinath Parida-Ganjam</option>
                          <option value="40">Ajit Kumar Das-Jagatsinghpur</option>
                          <option value="41">Anuradha Jena-Jagatsinghpur</option>
                          <option value="42">Santanu Mohapatra-Jagatsinghpur</option>
                          <option value="43">Rashmi Pradhan-Jagatsinghpur</option>
                          <option value="44">Debashis Sahu-Jagatsinghpur</option>
                          <option value="45">Shakti Mohanty-Jajpur</option>
                          <option value="46"> Prakash Behera-Jajpur</option>
                          <option value="47">Ananya Rout-Jajpur</option>
                          <option value="48">Bijay Kumar Das-Jajpur</option>
                          <option value="49">Manasi Pattnaik-Jajpur</option>
                          <option value="50">Arun Kumar Pradhan-Jharsuguda</option>
                          <option value="51">Sunita Meher-Jharsuguda</option>
                          <option value="52">Rajesh Behera-Jharsuguda</option>
                          <option value="53">Rupali Patel-Jharsuguda</option>
                          <option value="54">Santosh Mohapatra-Jharsuguda</option>
                          <option value="55">Ipsita Dash-Kalahandi</option>
                          <option value="56"> Pramod Sahu-Kalahandi</option>
                          <option value="57">Anjali Majhi-Kalahandi</option>
                          <option value="58">Sudhir Nayak-Kalahandi</option>
                          <option value="59">Renuka Behera-Kalahandi</option>
                          <option value="60">Debendra Digal-Kandhamal</option>
                          <option value="61">Namita Prusty-Kandhamal</option>
                          <option value="62">Harihara Nayak-Kandhamal</option>
                          <option value="63">Sneha Sahoo-Kandhamal</option>
                          <option value="64">Rakesh Parida-Kandhamal</option>
                          <option value="65">Simran Behera-Kendrapara</option>
                          <option value="66">Amarendra Jena-Kendrapara</option>
                          <option value="67">Jyotsna Sahoo-Kendrapara</option>
                          <option value="68">Prabhat Swain-Kendrapara</option>
                          <option value="69">Poonam Sahoo-Kendrapara</option>
                          <option value="70">Dilip Behera-Keonjhar</option>
                          <option value="71">Radhika Dash-Keonjhar</option>
                          <option value="71">Subhankar Mohapatra-Keonjhar</option>
                          <option value="72">Sneha Pradhan-Keonjhar</option>
                          <option value="73">Arjun Sahoo-Keonjhar</option>
                          <option value="74">Tanuja Mishra-Khurda</option>
                          <option value="75">Siddharth Dash-Khurda</option>
                          <option value="76">Aishwarya Pattnaik-Khurda</option>
                          <option value="77">Pradeep Behera-Khurda</option>
                          <option value="78">Neha Mohanty-Khurda</option>
                          <option value="79">Dinesh Nayak-Koraput</option>
                          <option value="80">Priyanka Panda-Koraput</option>
                          <option value="81">Satish Sahu-Koraput</option>
                          <option value="85">Ananya Dash-Koraput</option>
                          <option value="86">Niranjan Patra-Koraput</option>
                          <option value="87">Manisha Behera-Malkangiri</option>
                          <option value="88">Bijay Kumar Meher-Malkangiri</option>
                          <option value="89">Snehalata Sahoo-Malkangiri</option>
                          <option value="90">Anand Singh-Malkangiri</option>
                          <option value="91">Preeti Mohapatra-Malkangiri</option>
                          <option value="92">Rahul Das-Mayurbhanj</option>
                          <option value="93">Anshika Singh-Mayurbhanj</option>
                          <option value="94">Pranab Behera-Mayurbhanj</option>
                          <option value="95">Suman Das-Mayurbhanj</option>
                          <option value="96">Manoj Mohanty-Mayurbhanj</option>
                          <option value="97">Priya Pradhan-Nabarangpur</option>
                          <option value="98">Debashis Sahu-Nabarangpur</option>
                          <option value="99">Tanmayee Mohapatra-Nabarangpur</option>
                          <option value="100">Rakesh Behera-Nabarangpur</option>
                          <option value="101">Swetapadma Das-Nabarangpur</option>
                          <option value="102">Aniket Rath-Nayagarh</option>
                          <option value="103">Ipsita Samal-Nayagarh</option>
                          <option value="104">Rahul Mohapatra-Nayagarh</option>
                          <option value="105">Swara Sahu-Nayagarh</option>
                          <option value="106">Abhinav Behera-Nayagarh</option>
                          <option value="107">Dipti Dash-Nuapada</option>
                          <option value="108">Rakesh Panigrahi-Nuapada</option>
                          <option value="109">Aditi Patel-Nuapada</option>
                          <option value="110">Sarthak Nayak-Nuapada</option>
                          <option value="111">Sushree Mohanty-Nuapada</option>
                          <option value="112">Rishi Satpathy-Puri</option>
                          <option value="113">Tanvi Pradhan-Puri</option>
                          <option value="114">Ashutosh Panda-Puri</option>
                          <option value="115">Trisha Mohapatra-Puri</option>
                          <option value="116">Suryakant Jena-Puri</option>
                          <option value="117">Arpita Behera-Rayagada</option>
                          <option value="118">Kaustav Rath-Rayagada</option>
                          <option value="119">Pragyan Mohanty-Rayagada</option>
                          <option value="120">Subrat Nayak-Rayagada</option>
                          <option value="121">Smruti Patel-Rayagada</option>
                          <option value="122">Prateek Behera-Sambalpur</option>
                          <option value="123">Aishani Mohapatra-Sambalpur</option>
                          <option value="124">Shubham Patel-Sambalpur</option>
                          <option value="125">Swati Sahu-Sambalpur</option>
                          <option value="126">Rishi Das-Sambalpur</option>
                          <option value="127">Anshul Das-Sonepur</option>
                          <option value="128">Shruti Biswal-Sonepur</option>
                          <option value="129">Rishabh Patel-Sonepur</option>
                          <option value="130">Smita Behera-Sonepur</option>
                          <option value="131">Sujata Sahoo-Sonepur</option>
                          <option value="132">Somesh Pradhan
                            -Sundargarh</option>
                          <option value="133">Simran Singh
                            -Sundargarh</option>
                          <option value="134">Suraj Mohapatra
                            -Sundargarh</option>
                          <option value="135">Shreya Panigrahi
                            -Sundargarh</option>
                          <option value="136">Shashank Das
                            -Sundargarh</option>
                          <option value="137">Niharika Mohanty-Nawarangpur</option>
                          <option value="138">Surya Prakash Sahu-Nawarangpur</option>
                          <option value="139">Snehal Singh-Nawarangpur</option>
                          <option value="140">Nishant Behera-Nawarangpur</option>
                          <option value="141">Sweta Patra-Nawarangpur</option>
                          <option value="142">Navin Rath-Nayagarh </option>
                          <option value="143">Sarita Behera-Nayagarh </option>
                          <option value="144">Neelam Sahoo-Nayagarh </option>
                          <option value="145">Sagarika Patel-Nayagarh </option>
                          <option value="146">Santosh Mohanty-Nayagarh </option>
                          <option value="147">Sneha Singh-Nuapada</option>
                          <option value="148">Shubham Mohapatra-Nuapada</option>
                          <option value="149">Samiksha Patel-Nuapada</option>
                          <option value="150">Surya Prakash Das-Nuapada</option>
                          <option value="151">Simran Behera-Nuapada</option>
                        </select>
                        <label for="select1">Guide</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input
                          type="price"
                          class="form-control bg-white border-0"
                          id="price"
                          name="price"
                          placeholder="price" value="200"
                        />
                        <label for="email">Price</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea
                          class="form-control bg-white border-0"
                          placeholder="Special Request"
                          id="message"
                          name="message"
                          style="height: 100px"
                        ></textarea>
                        <label for="message">Special Request</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button
                        class="btn btn-primary text-white w-100 py-3"
                        type="submit"
                      >
                        Book Now
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Tour Booking End -->

        <!-- Subscribe Start -->
        <!-- <div class="container-fluid subscribe py-5">
          <div class="container text-center py-5">
            <div class="mx-auto text-center" style="max-width: 900px">
              <h5 class="subscribe-title px-3">Subscribe</h5>
              <h1 class="text-white mb-4">Subscribe to Our Exclusive Newsletter</h1>
              <p class="text-white mb-5">
                Join our community of passionate travelers and adventurers by subscribing to our exclusive newsletter. Stay informed about the latest travel trends, destination spotlights, and hidden gems waiting to be discovered. Receive expert advice on planning your next adventure, from packing hacks to budget-friendly travel tips.
              </p>
              <div class="position-relative mx-auto">
                <input
                  class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5"
                  type="text"
                  placeholder="Your email"
                />
                <button
                  type="button"
                  class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2"
                >
                  Subscribe
                </button>
              </div>
            </div>
          </div>
        </div> -->
        <!-- Subscribe End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
          <div class="container py-5">
            <div class="row g-5">
              <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                  <h4 class="mb-4 text-white">Get In Touch</h4>
                  <a href="./contact.html"
                    ><i class="fa fa-building me-2"></i> Bhubaneswar, Odisha, India</a
                  >
                  <a href="mailto:touristvenues@gmail.com" 
                    ><i class="fas fa-envelope me-2" ></i> touristvenues@gmail.com</a
                  >
                  <a href="mailto:touristvenues@support.com"
                    ><i class="fa fa-question-circle me-2"></i> touristvenues@support.com</a
                  >
                  <a href=""><i class="fas fa-phone me-2"></i> +91 XXXXX XXXXX</a>
                  <a href="" class="mb-3"
                    ><i class="fas fa-print me-2"></i> +91 XXXXX XXXXX</a
                  >
                  <div class="d-flex align-items-center">
                    <i class="fas fa-share fa-2x text-white me-2"></i>
                    <a
                      class="btn-square btn btn-primary rounded-circle mx-1"
                      href=""
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a
                      class="btn-square btn btn-primary rounded-circle mx-1"
                      href=""
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a
                      class="btn-square btn btn-primary rounded-circle mx-1"
                      href=""
                      ><i class="fab fa-instagram"></i
                    ></a>
                    <a
                      class="btn-square btn btn-primary rounded-circle mx-1"
                      href=""
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                  <h4 class="mb-4 text-white">Company</h4>
                  <a href="index.html"><i class="fas fa-angle-right me-2"></i> Home</a>
                  <a href="about.html"><i class="fas fa-angle-right me-2"></i> About</a>
                  <a href="tour.html"><i class="fas fa-angle-right me-2"></i> Explore Tour</a>
                  <a href="booking.html"><i class="fas fa-angle-right me-2"></i> Book a Tour</a>
                  <a href="guides.html"><i class="fas fa-angle-right me-2"></i> Book a Guide</a>
                  <a href="gallery.html"><i class="fas fa-angle-right me-2"></i> Gallery</a>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                  <h4 class="mb-4 text-white">Support</h4>
                  <a href="./contact.html"><i class="fas fa-angle-right me-2"></i> Contact</a>
                  <a href="index.html"
                    ><i class="fas fa-angle-right me-2"></i> Legal Notice</a
                  >
                  <a href="index.html"
                    ><i class="fas fa-angle-right me-2"></i> Privacy Policy</a
                  >
                  <a href="index.html"
                    ><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a
                  >
                  <a href="contact.html"><i class="fas fa-angle-right me-2"></i> Sitemap</a>
                  <a href="index.html"
                    ><i class="fas fa-angle-right me-2"></i> Cookie policy</a
                  >
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                  <div class="row gy-3 gx-2 mb-4">
                    <div class="col-xl-6">
                      <form>
                        <div class="form-floating">
                          <select class="form-select bg-dark border" id="select1">
                            <option value="1">USA</option>
                            <option value="2">Eng</option>
                          </select>
                          <label for="select1">English</label>
                        </div>
                      </form>
                    </div>
                    <div class="col-xl-6">
                      <form>
                        <div class="form-floating">
                          <select class="form-select bg-dark border" id="select1">
                            <option value="1">Inr</option>
                            
                          </select>
                          <label for="select1">₹</label>
                        </div>
                      </form>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Travel Recommendation System</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">

                        Designed By <a class="text-white" href="#">Gecian</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>


        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>