<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <!------TODO: Make sure to use the asset function in case something goes wrong with relative paths ------>
    <link rel="icon" href="fotos/website.icon.jpg" type="image">
</head>


<body>
<!------Navigation------>

<nav>
    <ul class="nav">
        <li class="nav">

            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a target="_blank" href="https://github.com/HZ-HBO-ICT">Github HBO-ICT</a>
                <a target="_blank" href="https://shorturl.at/5Yn47">PCO Notion</a>
                <a target="_blank" href="https://hz.osiris-student.nl/voortgang">Progress MyHZ</a>
                <a target="_blank" href="https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754">Regulations HBO-ICT</a>
            </div>
            <span style="font-size:30px;cursor:pointer;color:#5ba33e;" onclick="openNav()">&#9776; </span>

            <!------TODO: Should be on the bottom of the file ------>
            <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "250px";
                    document.getElementById("main").style.marginLeft = "250px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                    document.getElementById("main").style.marginLeft = "0";
                }
            </script>

        </li>
        <li class="nav"><a href="{{route('welcome')}}">Home</a></li>
        <li class="nav"><a href="{{route('profile')}}">Profile</a></li>
        <li class="nav"><a href="{{route('posts.index')}}">Blog</a></li>
        <li class="nav"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="nav"><a href="{{route('faq')}}">FAQ</a></li>
        <a href="https://hz.nl/"><img style="float: right;" id="groenLogoMagEigenlijkNiet"
                                      src="/fotos/hzlogo-Photoroom.png" alt="hzLogo" class="illegaalgroenlogo"></a>
        <li style="float: right;" class="nav"><button class="nav" onclick="changePhoto()">Hugo Button!</button></li>
    </ul>

    <script src="js/logoknop.js"></script>
</nav>

{{ $slot }}

<section class="footer">
    <a target="_blank" href="https://www.instagram.com/gijs_borghouts/?next=%2F"><img
            src="/fotos/InstagramUpdated-Photoroom.png" alt="instagram" class="footerlogo"> </a>
    <a target="_blank" href="https://github.com/SIrAdolphus"><img src="/fotos/gitUpdated-Photoroom.png" alt="github"
                                                                  class="footerlogo"></a>
    <a href="mailto:borg0039@hz.nl"><img src="/fotos/mailUpdated2-Photoroom.png" alt="Mail" class="footerlogo"></a>
</section>
</body>

</html>
