<?php require_once('intialize.php'); ?>
<html>
<head>
<title>Expenses</title>
</head>
<body>
    <form>
        <label for="expense_date">Expense Date: </label>
        <input type="text" id="expense_date" name="fname"><br>

        <label for="description">Description: </label>
        <select name="description" id="description">
            <option value="sales">Sales</option>
            <option value="purchase">Purchase</option>
            <option value="shop_essentials">Shop Essentials</option>
            <option value="bill">Bill</option>
            <option value="kadan">Kadan</option>
        </select><br>

        <label for="amount">Amount: </label>
        <input type="text" id="amount" name="amount"><br>

        <label for="source">Source: </label>
        <select name="source" id="source">
            <option value="hand">Hand</option>
            <option value="bank">Bank</option>
            <option value="wallet">Wallet</option>
            <option value="product">Product</option>
            <option value="voucher">Voucher</option>
            <option value="other">Other</option>
        </select><br>

        <label for="cash_flow">Cash Flow: </label>
        <input type="radio" id="cash_flow" name="credit" value = "Credit">
        <label for="cash_flow"> Credit</label>
        <input type="radio" id="cash_flow" name="debit" value = "Debit">
        <label for="cash_flow"> Debit </label><br>

        <label for="comments">Comments: </label>
        <input type="text" id="comments" name="comments"><br>

        <label for="liability_person">Liability Person: </label>
        <select name="liability_person" id="liability_person">
            <option value="vaithyanathan">Vaithyanathan</option>
            <option value="vinithamani">Vinithamani</option>
            <option value="kamalanathan">Kamalanathan</option>
            <option value="muthunatahan">Muthunatahan</option>
            <option value="ramanathan">Ramanathan</option>
            <option value="kamalamani">Kamalamani</option>
        </select><br>
    </form>
</body>
</html>