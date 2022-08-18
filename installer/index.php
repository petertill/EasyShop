<!DOCTYPE html>
<html>
    <head>
        <title>EasyShop Installer</title>
    </head>
    <body style="background-color: #F0F8FF;"><center>
        <h1>EasyShop installation & configuration</h1></center>
        <center>
            <div style="
            -webkit-box-shadow: 10px 10px 5px -8px rgba(0,0,0,0.58);
-moz-box-shadow: 10px 10px 5px -8px rgba(0,0,0,0.58);
box-shadow: 10px 10px 5px -8px rgba(0,0,0,0.58);
            
            background-color: white; width: 50%;align-content: left; padding: 50px;">
Welcome to the EasyShop installation wizard! I'll help you to configure your new shop. If you're unsure about something like database name, let your system administrator do it. After installation, this installer will be removed because of the safety of your data. You can config your shop with editing /config/config.php inside your webserver root folder.
<form method="POST" action="info.php">
        <fieldset style="width:270px; align: left; width: 80%;">
        <legend>Shop details</legend>
            <label for="shop-name">Shop name</label><br>
            <input type="text" name="shop-name" id="shop-name" placeholder="MyShop" required><br>
            <label for="shop-desc">Shop description</label><br>
            <textarea id="shop-desc" name="shop-desc" rows="4" cols="30" placeholder="Its my shop where you can buy human kidneys... I mean anything..." required></textarea><br>
            <label for="support-email">Support email</label><br>
            <input type="email" name="support-email" id="support-email" placeholder="info@mygreatshop.com" required><br>
            <label for="addr">Company localisation</label><br>
            <input type="text" name="addr" id="addr" placeholder="Peaceful Street 28" required>
        </fieldset>
        <fieldset style="width:270px; align: left; width: 80%;">
        <legend>System configuration</legend>
            <label for="db-host">Database host (MySQL)</label><br>
            <input type="text" name="db-host" id="db-host" placeholder="localhost" required><br>
            <label for="db-user">Database user</label><br>
            <input type="text" name="db-user" id="db-user" placeholder="root" required><br>
            <label for="db-pw">DB user password</label><br>
            <input type="password" name="db-pw" id="db-pw" placeholder="MyStr0ngp4ssw0rd12" required><br>
            <label for="db">Database</label><br>
            <input type="text" name="db" id="db" placeholder="ShopDatabase">
        </fieldset>
        <fieldset style="width:270px; align: left; width: 80%;">
        <legend>Admin login</legend>
            <label for="admin-user">Admin username</label><br>
            <input type="text" name="admin-user" id="admin-user" placeholder="AlphaGoat"><br>
            <label for="admin-pw">Admin password</label><br>
            <input type="text" name="admin-pw" id="admin-pw" placeholder="MyStr0ngp4ssw0rd12"><br>
        </fieldset>  <br>

        <input style="background-color: blue; color: white; padding: 10px;" type="submit" value="Next">
</form>
        
        
        </div>
    </center>
    </body>