<!-- section: price -->
<section id="price" class="home-section text-center bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 wow fadeInLeft">
                <div class="section-heading">
                    <h1>Price</h1>
                    <i class="fa fa-2x fa-angle-right"></i>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 wow fadeInUp">
                <table>
                    <tbody>
                        <tr>
                            <td>Type</td>
                            <td>Apartment</td>
                        </tr>
                        <tr>
                            <td>Sleeps</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>Bedrooms</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Baths</td>
                            <td>3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-5 col-md-5 wow fadeInRight">            
                <h3 id="currencyResult">$100,00 - $200,00 USD*</h3>
                <form id="form2" name="formulario" action="" onSubmit="enviarDatos(); return false">
                    <?php
                        require 'php/currency_select.php';
                    ?>
                </form>  
                <script type="text/javascript" src="js/currency.js"></script>
                <p><br>*Per day. Depending on season, length of stay and number of persons.</p>
                <div class="page-scroll">
                    <a href= "#contact" class="btn btn-dark">Contact Us for Pricing</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /section: price -->