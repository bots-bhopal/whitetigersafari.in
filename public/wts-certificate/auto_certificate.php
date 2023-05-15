<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

    @import url('https://fonts.googleapis.com/css2?family=Noto+Serif+Devanagari:wght@600&display=swap');

    .score {
        animation-name: example;
        animation-duration: 4s;
        animation-iteration-count: infinite;
    }

    @keyframes example {
        0% {
            color: red;
        }

        25% {
            color: pink;
        }

        50% {
            color: blue;
        }

        75% {
            color: green;
        }

        100% {
            color: orange;
        }
    }
</style>

<?php
error_reporting(0);

define("DOMPDF_UNICODE_ENABLED", true);

include('includes/connection.inc.php');

// Include autoloader
require_once 'dompdf/autoload.inc.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;


if (($_POST['email']) && ($_POST['quiz']) && ($_POST['quiz']) != '') {
    $quiz = $_POST['quiz'];
    $email = $_POST['email'];
    $newgmail = substr($email, -10, 10);
    $newgmail0 = "0" . substr($email, -10, 10);
    $newgmail91 = "+91" . substr($email, -10, 10);
    $sql = "SELECT * FROM $quiz WHERE `c_email`= '$email' || `c_mobile`= '$email' || SUBSTRING(c_mobile, -10) = '$newgmail' || SUBSTRING(c_mobile, -10) = '$newgmail0' || SUBSTRING(c_mobile, -10) = '$newgmail91'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $rowcount = mysqli_num_rows($result);
    $check_email = $row["c_email"] ?? "";

    $id = $row["c_id"] ?? "";
    $c_name = $row["c_name"] ?? "";
    // $c_score = $row["c_score"] ?? "";
    $c_email = $row["c_email"] ?? "";
    $c_result = $row['c_result'];

    if ($rowcount) {
        // $c_address = $row["c_address"]??"";

        if ($quiz == 'namkaran') {
            if ($c_result == 1) {
                $mydata .= "<div class='card' style='border: none; background-color: transparent!important;'>";
                $mydata .= "<div>";
                $mydata .= "<h4 class='mb-2' style='font-weight: 700;'>Welcome ! $c_name </h4>";
                $mydata .= "<h5 class='mb-3 score' style='font-weight: 600;'>बाघ शावक नामकरण कार्यक्रम में भाग लेने हेतु धन्यवाद !!</h5>";
                $mydata .= "</div>";

                $data = '<style>*{padding:0;margin:0;}.content_area {position:fixed;top:0;left:0; }.content1 {position:absolute; z-index:999; top:35%; left:12%; right:12%; text-align:justify;} #para{font-size:28px; line-height: 38px;}</style>
                        <div class="content_area">
                            <span style="font-weight: 700; font-size: 28px; position: absolute; left: 45%; top: 26%;">' . $c_name . '</span>
                            <img src="dompdf/' . $quiz . '.jpg" alt="" width="100%" height="795px">
                        </div>
                        ';

                $mydata .= "<div class='d-flex mx-auto mb-5'>
                                <a href='dompdf\\$quiz\\$c_email.pdf' target='_blank' class='btn btn-dark p-2' style='margin:0px 5px; font-size: 14px; font-weight: 600;' >Open Certificate as PDF</a>
                            </div>";
            } else {
                $mydata = "<div class='card' style='border: none; background-color: transparent!important;'>";
                $mydata .= "<div>";
                // $mydata .= "<h5 class='mb-2' style='font-weight: 700;'>Welcome ! $c_name </h5>";
                $mydata .= '<h6 class="mb-3" style="font-weight: 600;">"आपके द्वारा दर्ज किया गया मेल आईडी / मोबाइल नंबर हमारे रिकॉर्ड में  वन्या या शक्ति नाम को वोट देने वाले व्यक्तियों  की सूची में उपलब्ध नहीं है। कृपया सुनिश्चित करें कि आप ठीक वही मेल आईडी / मोबाइल नंबर दर्ज कर रहे हैं जिसका उपयोग आपने वोट देते समय किया था।"</h6>';
                $mydata .= "</div>";

                $data = '';
            }


            if (($_POST['email']) == $check_email || $newgmail || $newgmail0 || $newgmail91 && ($_POST['quiz']) && ($_POST['quiz']) != '') {
                if ($data != '') {
                    // Instantiate and use the dompdf class
                    $dompdf = new Dompdf();

                    // Load content from html file
                    $dompdf->loadHtml($data);

                    // (Optional) Setup the paper size and orientation
                    $dompdf->setPaper('A4', 'landscape');

                    // Render the HTML as PDF
                    $dompdf->render();
                    $file_location = $_SERVER['DOCUMENT_ROOT'] . "/whitetigersafari.in/public/wts-certificate/dompdf/namkaran/" . $check_email . ".pdf";
                    file_put_contents($file_location, $dompdf->output());
                } else {
                }
            } else {
            }
        } else {
        }
        $mydata .= "</div>";

        echo $mydata;
    } else {
?>

        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="margin-top: 60px;">
                    <div class="modal-header">
                        <img src='img/logo/mukundpur-logo.png' class='mr-2' alt='WTS-Logo' width='36' height='36'>
                        <h6 class="modal-title font-weight-bold py-2" id="exampleModalLabel">संदेश</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body font-weight-bold">
                        <p class="text-dark text-justify font-weight-bold">
                            आपके द्वारा दर्ज किया गया ई-मेल आईडी / मोबाइल नंबर हमारे रिकॉर्ड से मेल नहीं खाता है।
                            कृपया सुनिश्चित करें कि आप ठीक वही ई-मेल आईडी / मोबाइल नंबर दर्ज कर रहे हैं जिसका उपयोग आपने जमा करते समय किया था।
                        </p>
                        <p class="text-danger text-justify font-weight-bold">किसी भी समस्या के लिए कृपया अपना नाम/ई-मेल आईडी/मोबाइल नंबर 9922951184 पर व्हाट्सएप करें।</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">बंद करें</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#exampleModal1').modal('show');
        </script>

    <?php
    }
} else {
    ?>
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="margin-top: 60px;">
                <div class="modal-header">
                    <img src='img/logo/mukundpur-logo.png' class='mr-2' alt='WTS-Logo' width='36' height='36'>
                    <h6 class="modal-title font-weight-bold py-2" id="exampleModalLabel">आपने कुछ भी दर्ज नहीं किया है</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-danger text-justify font-weight-bold"> कृपया वही ई-मेल आईडी / मोबाइल नंबर दर्ज करें जिसका उपयोग आपने वोट करते समय किया था।</p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="close" class="btn btn-danger" data-dismiss="modal">बंद करें</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#exampleModal1').modal('show');
    </script>
<?php } ?>
