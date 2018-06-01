<!doctype html>
<html lang="en">
<head>
    
    <?php include 'includes/head.php'; ?>
    <title>Page Not Found</title>


    <style>
        .error {
            height: 30vw;

        }
        .error .valign {
            width: 100%;
        }
        h1 {
            color: #555;
            font-size: 3em;
            font-weight: 400;
            text-align: center;
            margin-bottom: 10px;
        }

        p {
            text-align: center;
            font-size: 1.3em;
        }
        @media(max-width: 500px) {
            .error {
                height: 200px;
            }
            h1 {
                font-size: 2.5em;
                margin-bottom: 5px;
            }
            p {
                font-size: 1.1em;
                line-height: 1.3em;
            }
        }

    </style>
</head>
<body>
    
     <!-- Header-top Starts -->
        <?php include 'includes/header-top.php'; ?>
    <!-- Header-top Ends -->
    
    <!-- Header Starts -->
        <?php include 'includes/header.php'; ?>
    <!-- Header Ends -->

    <!-- Navbar Starts -->

        <?php include 'includes/nav.php'; ?>

    <!-- Navbar Ends -->
    
    <div class="error valign-wrapper">
        <div class="valign">
            <h1>Page Not Found</h1>
            <p>Sorry, but the page you were trying to view does not exist.</p>
        </div>
        
    </div>


    <?php include 'includes/footer.php'; ?>
        
    <?php include 'includes/end-script.php'; ?>
</body>
</html>
<!-- IE needs 512+ bytes: http://blogs.msdn.com/b/ieinternals/archive/2010/08/19/http-error-pages-in-internet-explorer.aspx -->
