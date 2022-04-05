<?php get_header() ?>

<div>
    <?php 
$hero = get_field('group');
if( !empty( $hero ) ): ?>

    <div class="hero_section">

        <div class="banner" style="background-image:url('<?php echo $hero['banner-image']; ?>')">
        </div>

        <div class="banner_content homebanner">
            <h1 class="coty"><?php echo $hero['main-heading']; ?></h1>
            <h2><?php echo $hero['second-heading']; ?></h2>
            <h3><?php echo $hero['para']; ?></h3>

            <span><a class="button play-vid" href="#">View Video</a></span>
        </div>
    </div>
    <?php endif; ?>

</div>
<?php 
$rows = get_field('section');
if( $rows ) {?>

<div class="panel natureSection row">

    <?php  foreach( $rows as $row ) {?>
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 boxes row-nature-0 boxes row-nature-0">
        <div class="tile__info" style="background-image:url('<?php echo $row['bgimage'] ?>'); background-size:cover;">
            <h2 class="tile__title"><span><?php echo $row['heading'] ?></span></h2>
        </div>
    </div>

    <?php } ?>

</div>
    
<?php } ?>

<?php 
$location = get_field('location_sections');

if( $location ) {?>
<div id="locationSection" class="locationHome">

    <?php  foreach( $location as $row ) {
          ?>
    <div class="row teda">
        <div class="col-lg-5 locationContent">
            <h1><?php echo $row['top_heading']?></h1>
            <article>
                <p><?php echo $row['sub_heading'] ?></p>
                <p></p>
                <p>
                    <?php echo $row['summary'] ?>
                </p>
                <p></p>
            </article>
            <div class="readMore">
                <a href="<?php echo $row['discover'] ?>">Discover More</a>
            </div>
        </div>
        <div class="col-lg-6 location imgDiv" style="
            background-image: url('<?php echo $row['image'] ?>');
            background-size: cover;
          "></div>
        <div class="clear"></div>
    </div>

    <?php }  ?>

</div>
<?php } ?>
<div class="container" >
    <h1>STAY INFORMED</h1>
    <form action="" class="form1">
        <table>
            <tr>
                <td class="padding"><label for="fname">First Name*</label></td>
                <td class="padding"><input type="text" name="fname" class="txt2" id="" placeholder="First Name*"
                        required></td>
                <td class="padding"><label for="lname">Last Name*</label></td>
                <td class="padding"><input type="text" name="lname" class="txt2" id="" placeholder="Last Name*"
                        required></td>
            </tr>
            <tr>
                <td class="padding"><label for="email">Email*</label></td>
                <td class="padding"><input type="email" name="email" class="txt2" id="" placeholder="Email*" required>
                </td>
                <td class="padding"><label for="number">Phone</label></td>
                <td class="padding"><input type="number" name="phone" class="txt2" id="" placeholder="Phone"></td>
            </tr>
            <tr>
                <td class="padding"><label for="number">Zip*</label></td>
                <td class="padding"><input type="number" name="zip" id="" class="txt2" placeholder="Zip*" required>
                </td>
            </tr>

        </table>
    </form>
    <div class="txt1">I am not interested in the following neighbourhoods:</div>
    <form action="" class="form2">
        <table>
            <tr>
                <td class="check1"><input type="checkbox" name="ranger" class="check" id="">Ranger at Avance</td>
                <td class="check1"><input type="checkbox" name="piedmont" class="check" id="">Piedmont at Avance
                </td>
            </tr>
            <tr>
                <td class="check1"><input type="checkbox" name="loma" class="check" id="">Loma at Avance</td>
            </tr>
        </table>

        <div class="text-center"><input type="button" name="btn" class="btn1" id="" value="Sign-Up Today"></div>

    </form>
</div>
</section>
<section>
    <div class="privacy text-center">
        <p>By providing your name and contact information and clicking the submission button, you consent and agree
            to receive marketing communications from us or made on our behalf, including emails and calls or text
            messages using an automatic telephone dialing system or an artificial or prerecorded voice. Your consent
            and agreement to the foregoing, including the receipt of autodialed marketing messages, is not a
            condition of purchasing any property, goods, or services from us, and you may call us instead of
            submitting your information online. Your consent herein also applies to any future registration on
            national or state Do Not Call lists. For mobile phones, standard text message and data charges apply.
            Consult our Privacy Policy for additional information, including unsubscribe options.</p>
    </div>
    </div>

    </div>
    <?php get_footer() ?>