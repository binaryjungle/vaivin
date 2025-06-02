<?php require_once('../intialize.php'); ?>
<?php $page_title="Vaivin"?>
<?php require_once(PROJECT_PATH . '/shared/header.php'); ?>

<?php require_once('../intialize.php'); ?>

    <form  id="expense_form">
        <label for="expense_date">Expense Date: </label>
        <input type="text" id="expense_date" name="fname" autofocus><br>

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

        <label for="comment">Comment: </label>
        <input type="text" id="comment" name="comment"><br>

        <label for="liability_person">Liability Person: </label>
        <select name="liability_person" id="liability_person">
            <option value="vaithyanathan">Vaithyanathan</option>
            <option value="vinithamani">Vinithamani</option>
            <option value="kamalanathan">Kamalanathan</option>
            <option value="muthunatahan">Muthunatahan</option>
            <option value="ramanathan">Ramanathan</option>
            <option value="kamalamani">Kamalamani</option>
        </select><br>

        <input type="button" id="btn_add" value="Add"><br>

    </form>

    <p id="dummy_para">

    </p>
    <table id="myTable">
    </table>

    <script>
        
        function add_validate_input() {

            let txt_expense_date = document.getElementById("expense_date");
            let txt_description = document.getElementById("description");
            let txt_amount = document.getElementById("amount");
            let txt_source = document.getElementById("source");
            let txt_cash_flow = document.getElementById("cash_flow");
            let txt_comment = document.getElementById("comment");
            let txt_liability_person = document.getElementById("liability_person");

            if (txt_description.value.trim().toLowerCase() === "kadan") {
                if (txt_expense_date.value.trim() === "" || txt_description.value.trim() === "" || txt_amount.value.trim() === "" || txt_source.value.trim() === ""  || txt_cash_flow.value.trim() === "" || txt_comment.value.trim() === "" || txt_liability_person.value.trim() === "" ) {
                    alert ("All fields are mandatory for the description ==>> Kadan!");
                } else {
                    add_validation_result = "passed";
                }
            } else {
                if (txt_expense_date.value.trim() === "" || txt_description.value.trim() === "" || txt_amount.value.trim() === "" || txt_source.value.trim() === ""  || txt_cash_flow.value.trim() === "" || txt_comment.value.trim() === "" ) {
                alert ("All fields EXCEPT LIABILITY PERSON are mandatory");
                } else {
                    add_validation_result = "passed";
                }
            }
        }
        function add_table_header() {
                if (add_validation_result === "passed") {
                let table = document.getElementById("myTable");
                let headerCells = document.getElementsByTagName("th");

                if (table.rows.length === 0) {
                let row = table.insertRow(0);

                row.insertCell(0).outerHTML = "<th>Expense Date</th>";
                row.insertCell(1).outerHTML = "<th>Description</th>";
                row.insertCell(2).outerHTML = "<th>Amount</th>";
                row.insertCell(3).outerHTML = "<th>Source</th>";
                row.insertCell(4).outerHTML = "<th>Cash Flow</th>";
                row.insertCell(5).outerHTML = "<th>Comment</th>";
                row.insertCell(6).outerHTML = "<th>Liability Person</th>";
                }
            }
        }
        function add_table_row() {
            alert (add_validation_result);
            if (add_validation_result === "passed") {
            let table = document.getElementById("myTable");
            let row = table.insertRow(-1);
            let td_cell_expense_date = row.insertCell(0);
            let td_cell_description = row.insertCell(1);
            let td_cell_amount = row.insertCell(2);
            let td_cell_source = row.insertCell(3);
            let td_cell_cash_flow = row.insertCell(4);
            let td_cell_comment = row.insertCell(5);
            let td_cell_liability_person = row.insertCell(6);

            let txt_expense_date = document.getElementById("expense_date");
            let txt_description = document.getElementById("description");
            let txt_amount = document.getElementById("amount");
            let txt_source = document.getElementById("source");
            let txt_cash_flow = document.getElementById("cash_flow");
            let txt_comment = document.getElementById("comment");
            let txt_liability_person = document.getElementById("liability_person");

            td_cell_expense_date.innerHTML = txt_expense_date.value;
            td_cell_description.innerHTML = txt_description.value;
            td_cell_amount.innerHTML = txt_amount.value;
            td_cell_source.innerHTML = txt_source.value;
            td_cell_cash_flow.innerHTML = txt_cash_flow.value;
            td_cell_comment.innerHTML = txt_comment.value;
            td_cell_liability_person.innerHTML = txt_liability_person.value;
            
            add_validation_result = "failed"

            document.getElementById("expense_form").reset();
            document.getElementById("expense_date").focus();
            }
        }

        let add_validation_result = "failed"
        let btn_add_click = document.getElementById("btn_add");
        btn_add_click.addEventListener("click", add_validate_input);
        btn_add_click.addEventListener("click", add_table_header);
        btn_add_click.addEventListener("click", add_table_row);
        
    </script>

<?php require_once(PROJECT_PATH . '/shared/footer.php'); ?>