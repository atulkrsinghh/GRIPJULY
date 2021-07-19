<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
     <link rel="preconnect" href="https://fonts.gstatic.com"> 
 <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet"> 
</head>
<body>
<?php include('navbar-1.php'); ?>
    <style>
        body{
            
            margin:0;
            padding:0;
            background: url(bg1.jpg);
            background-position: center;
            background-size: cover;
            background-image: no-repeat;
            /* font-family: 'Baloo Bhai 2', cursive; */
        }
        .container{
            display: flex;
            flex-direction: row;
            margin: 12px auto;
            color: white;
            padding:10px 10px;
            
            
        }
        p{
            font-size:23px;
            text-align: center ;
            font-family: 'Baloo Bhai 2', cursive;
            font-weight: normal;
            text-align:left;

        }
        h1
        {
            text-decoration: underline;
        }
        .col{
            border: 2px solid #0082e6;
            padding: 5px 5px;
            font-weight: bold;
            font-size: 18px;
            text-align: center;
            width: 55%;
            margin: 12px auto;
            height: 500px;
            background: black;
            opacity: 0.9;
            border-radius: 5px;
            margin-right:15px;
        }
        .coll{
            border: 2px solid #0082e6;
            padding: 5px 5px;
            font-weight: bold;
            font-size: 18px;
            text-align: center;
            width: 55%;
            margin: 12px auto;
            height: 450px;
            background: black;
            opacity: 0.9;
            border-radius: 5px;
            margin-right:15px;

        }
        .col:hover{
            background: black;
            color: white;
        }

    </style>
    <div class="container">
        <div class="col">
            <br>
            <h1><u>OUR MISSION</u></h1>
            <br>
            <br>
            <p text-align: center ; font-size: 20px>Attracting deposits and developing them, in order to achieve the best financial return for shareholders and depositors. Expanding banking activities to include new sectors and economic activities; such as agriculture, industry, trade and services. Provide financing for investors. Provide security for depositors.</p>
        </div>
        <div class="coll">
        <br>
            <h1>OUR VISION</h1>
            <br>
            <br>
           <p> To be a financially viable, independent community bank that is committed to improving the quality of life of the communities we serve. To earn the loyalty of employees, customers and the community by operating with integrity and fairness at all time.
            </p>
            </div>
        <div class="col">
        <br>
            <h1>STRATEGIC GOALS</h1>
            <br>
            <br>
            <p>
            Preparation of individual service packages for target sectors, conducting industry campaigns;
            Introduction of new products and services, adaptation and improvement of existing products and services to better meet the needs and desires of our customers;
            Expansion of electronic banking services.Maintaining the position of the financial market and improving the Bank`s image.</p>
        </div>
    </div>
    
</body>
</html>