<?php include 'view/header.php'; ?>
<main> 
    <form action="." method="post" id="aligned" >
        <input type="hidden" name="action" value="read">
        <header class="container-fluid px-0">
            <div class="row" >
                <div class="col d-none d-xl-block">
                    <p>Serving Southeast Nebraska</p>
                    <p>Contact Us</p>
                    <p>Jonathan Wagner 402.413.0092</p>
                    <p>Junior Reyes 402.309.4913<br>
                        (Se Habla Espanol)</p>
                    <p>heartlandseamless@gmail.com </p>
                </div>
                <div class="col">
                    <img src="images/UpdatedLogo.PNG" class="img-fluid" alt="Heartland Logo"/>
                </div>
                <div class="col">
                    <h4>
                        Customer Information
                    </h4>
                        <input type="text" name="cName" class="form-control"
                               value="<?php echo htmlspecialchars($cName); ?>"
                               placeholder="Name" required>
                        <input type="text" name="company" class="form-control"
                               value="<?php echo htmlspecialchars($company); ?>"
                               placeholder="Company Name">
                        <input type="text" name="address" class="form-control"
                               value="<?php echo htmlspecialchars($address); ?>"
                               placeholder="Address">
                        <input type="text" name="phone" class="form-control"
                               value="<?php echo htmlspecialchars($phone); ?>"
                               placeholder="Phone">
                        <input type="text" name="email" class="form-control"
                               value="<?php echo htmlspecialchars($email); ?>"
                               placeholder="Email" required>
                </div>
            </div>
        </header>
        <br>
        <?php for ($i = 0; $i < $gCount; $i++) : ?>
            <div class="form-group row no-gutters"> 
                <div class="col-2 text-right">
                    <label for="<?php echo htmlspecialchars(lcfirst(str_replace(' ', '', $gParts[$i]))); ?>" 
                           class="col-form-label"><?php echo htmlspecialchars($gParts[$i]); ?>:</label>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control-sm" 
                           name="<?php echo htmlspecialchars(lcfirst(str_replace(' ', '', $gParts[$i]))); ?>" 
                           id="<?php echo htmlspecialchars(lcfirst(str_replace(' ', '', $gParts[$i]))); ?>" 
                           value="<?php echo htmlspecialchars($gParts2[$i]); ?>" readonly>
                </div>

            </div>
        <?php endfor; ?>

        <div class="form-group row no-gutters"> 
            <div class="col-2 text-right">
                <label class="col-form-label font-weight-bold">Total:</label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control-sm" name="total" 
                       value="<?php echo htmlspecialchars($total); ?>" >
            </div>
        </div>

        <div class="form-group row"> 
            <div class="col-2 text-right">
                <label class="col-form-label">&nbsp;</label>
            </div>            
            <div class="col-auto">
                <input type="submit" class="btn btn-primary" name="read" id="read" value="Send Email">
            </div>
        </div>
    </form>
</main>
<?php include 'view/footer.php'; 

