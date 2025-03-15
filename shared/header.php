<html>

  <head>
    <title><?php echo $page_title?></title>
    <link rel="stylesheet" media="all" href="stylesheets/public.css">
  </head>

  <body>
    <header>
      <h1>VaiVin</h1>
    </header>

    <div class="navbar">
      <a href="index.php">Home</a>

      <div class="dropdown">
        <button class="finance_button">Finance <i class="fa fa-caret-down"></i> </button>

        <div class="dropdown_content">
          <a href="finance/expenses.php">Expenses</a>
          <a href="#">Liability</a>
          <a href="#">Description</a>
          <a href="#">Party</a>
        </div>
      </div>

      <a href="index.php">Education</a>
      <a href="index.php">Documents</a>
      <a href="index.php">Memories</a>
      <a href="index.php">Contact</a>
    </div>