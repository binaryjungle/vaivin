<html>

  <head>
    <title><?php echo $page_title?></title>
    <!--<link rel="stylesheet" media="all" href="stylesheets/public.css">-->
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
          <a href="finance/liability.php">Liability</a>
          <a href="finance/description.php">Description</a>
          <a href="finance/party.php">Party</a>
        </div>
      </div>

      <a href="education.php">Education</a>
      <a href="documents.php">Documents</a>
      <a href="memories.php">Memories</a>
      <a href="contact.php">Contact</a>
    </div>