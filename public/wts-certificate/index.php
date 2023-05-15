<?php
error_reporting(0);
include('includes/header.php');
include('includes/connection.inc.php');
?>

<div id="admin-content">
    <div class="container mt-5 pt-5 pl-4 pr-4">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center" style="font-weight: 600;">"बाघ शावक नामकरण"</h2>
            </div>

            <div class="col-lg-6 col-md-8 col-sm-12 mx-auto mt-3" style="background: rgba(27, 58, 31, 0.2); border-radius: 4px; border: 2px solid #555;">

                <img src="img/logo/mukundpur-logo.png" alt="WTS-Logo" width='80px' height='80px' class="img-fluid d-block mx-auto pt-4 pb-4">

                <div id="msg"></div>
                <!-- Form Start -->
                <form id="quizFrm" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label class="text-primary mb-3" style="font-size: 18px; font-weight: 700;" hidden>Select Your Quiz and Month</label>
                        <select id="quiz" name="quiz" class="form-control mb-2" style="font-size: 14px; font-weight: 600;" hidden>
                            <!-- <option value="">----- Select Your Quiz Here -----</option> -->
                            <option value="namkaran">Bagh Shavak Namkaran</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="mb-2" style="color: #2f353a; font-size: 18px; font-weight: 700;">अपना ईमेल या मोबाइल नंबर डालें </label>
                        <p style="color: #a12430!important; font-size: 13px; font-weight: 700;">(ई - सर्टिफिकेट केवल वन्या या शक्ति नाम को वोट देने वाले व्यक्तियों को प्रदान किया जायेगा)</p>
                        <input type="text" id="email" name="email" class="form-control" placeholder="अपना ईमेल या मोबाइल नंबर डालें" style="font-size: 14px; font-weight: 500;">
                    </div>

                    <div class="dropdown">
                        <a id="search" href="javascript:void(0);" name="save" onclick="myFunction()" class="btn btn-block btn-success mb-3" style="font-size: 14px; font-weight: 600;">प्रमाण पत्र प्राप्त करें</a>
                        <!-- <button id="search" name="save" onclick="myFunction()" class="btn btn-sm btn-success mb-3" style="font-size: 14px; font-weight: 600;">View Result</button> -->

                        <!-- <button type="button" class="btn btn-sm btn-danger mb-3 dropdown-toggle float-right" data-toggle="dropdown" style="font-size: 14px; font-weight: 600;">
                            Download Answer Key
                        </button> -->

                        <!-- <div class="dropdown-menu" style="font-size: 14px!important;">
                            <a class="dropdown-item" href="assets/certificate/tata_quiz_dec_2020.pdf" target='__blank' download>Ta-Ta 20-20 Wildlife Quiz 2020</a>
                        </div> -->
                    </div>
                </form>
                <!-- /.Form End -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-12 mt-2 mb-5 offset-lg-3 offset-md-2 text-center">
                <a href="javascript:void(0);" onclick="showModal();" class="text-danger font-weight-bold" style="font-size: 14px!important;">
                    "बाघ शावक नामकरण" प्रमाण पत्र कैसे डाउनलोड करें ?
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center" id="customer_result">
            </div>
        </div>
    </div>
</div>

<!-- Certificate Script -->
<script>
    function showModal() {
        $('#instructionModal').modal('show');
    }

    function myFunction() {
        var quiz = $("#quiz").val();
        var mail_value = $("#email").val();

        $.ajax({
            url: 'auto_certificate.php',
            type: 'post',
            data: 'quiz=' + quiz + '&email=' + mail_value,
            beforeSend: function() {
                $("#search").html('कृपया प्रतीक्षा करें.....');
            },
            success: function(data) {
                if (data) {
                    $("#customer_result").html(data);
                    setTimeout(function() {
                        $('#search').html('प्रमाण पत्र प्राप्त करें');
                    }, 1000);
                } else {
                    $("#customer_result").html("<h4>रिकॉर्ड नहीं मिला !!</h4>");
                }
                // $("#quiz").val("");
                $("#email").val("");
            }
        });
    }
</script>

<!-- Instructions Modal -->
<div class="modal fade" id="instructionModal" tabindex="-1" role="dialog" aria-labelledby="instructionModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" style="margin-top: 60px;">
            <div class="modal-header">
                <img src='img/logo/mukundpur-logo.png' class='mr-2' alt='WTS-Logo' width='36' height='36'>
                <h6 class=" modal-title font-weight-bold py-2" id="instructionModalLabel">"बाघ शावक नामकरण" प्रमाण पत्र कैसे डाउनलोड करें ?</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <p class="text-danger text-justify font-weight-bold">Step 1 - Select "The name of the Quiz" from the first dropdown.</p> -->
                <p class="text-danger text-justify font-weight-bold">चरण 1 - कृपया टेक्स्ट बॉक्स में वोटिंग सबमिशन के दौरान आपके द्वारा प्रदान की गई सटीक ईमेल आईडी या मोबाइल नंबर दर्ज करें और 'प्रमाण पत्र प्राप्त करें बटन' पर क्लिक करें।</p>
                <p class="text-danger text-justify font-weight-bold">चरण 2 - एक बार जब आप 'प्रमाण पत्र प्राप्त करें बटन' पर क्लिक करते हैं, तो आपको अपना प्रमाणपत्र खोलने के लिए 'Open Certificate as PDF' बटन दिखाई देगा, इस पर क्लिक करके आप अपने प्रमाण पत्र को देख सकते हैं और फिर आप इसे अपने डिवाइस पर सेव कर सकते हैं।</p>
                <p class="text-success text-justify font-weight-bold">भाग लेने के लिए सभी को धन्यवाद!!</p>
                <p class="text-dark text-justify font-weight-bold">
                    यदि आप अपने एंड्रॉइड फोन पर प्रमाण पत्र खोलने का प्रयास कर रहे हैं तो आपसे अनुरोध है कि डिफ़ॉल्ट ब्राउज़र के बजाय "क्रोम" ब्राउज़र का उपयोग करें। इसे आप लैपटॉप/डेस्कटॉप पर भी खोल सकते हैं। एक बार प्रमाणपत्र एक नए टैब में खुलने के बाद इसे अपने डिवाइस पर सेव कर सकते हैं।।
                </p>

                <p class="text-primary text-justify font-weight-bold">
                    अगर किसी को प्रमाण पत्र खोलने में कोई समस्या है तो कृपया व्हाट्सएप के माध्यम से 9922951184 पर मैसेज करें।
                <ul class="text-dark text-justify font-weight-bold" style="font-size: 14px!important;">
                    <!-- <li style="list-style-type: disc!important; margin-left: 20px;">Name of Quiz</li> -->
                    <li style="list-style-type: disc!important; margin-left: 20px;">अपना नाम</li>
                    <li style="list-style-type: disc!important; margin-left: 20px;">ई-मेल आईडी और फोन नंबर</li>
                </ul>
                </p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">बंद करें</button>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>
