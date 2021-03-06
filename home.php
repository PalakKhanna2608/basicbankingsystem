<?php
    require('header.php');
?>

    <section class="flex-shrink-0 main-home modal-open" style="overflow:hidden">
        <div class="intro" >
            <h1 class="mt-5 col-md-12"> J A N S E V A &nbsp B A N K </h1>
            <p> Your trusted bank, at your service. </p>
        </div>

        <div class="direct col-md-12">
            <p> How can we help you today? </p>
            <div style="float: right; padding-right: 50px">
                <a href="/jansevabank/beneficiaries.php" class="btn btn-default"> Manage Beneficiaries </a>
                <a href="/jansevabank/summary.php" class="btn btn-default"> Account Summary </a>
            </div>
            <div style="float: right; padding-right: 72px; padding-top: 10px;">      
                <a href="/jansevabank/transactions.php" class="btn btn-default"> Transactions </a>
                <a href="/jansevabank/contact.php" class="btn btn-default"> File a Grievance </a>
            </div>
        </div>
    </section> 

<?php
    require('footer.php');
?>