<?php
require_once 'baglan.php';

//income_add işlem kısmı
if (isset($_POST['income_add'])) {
    try {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    
        $sql_income = $db->prepare("INSERT INTO income SET
            income_money = :income_money,
            income_category = :income_category,
            income_date = :income_date
        ");
    
        $sql_insert = $sql_income->execute([
            'income_money' => $_POST['income_money'],
            'income_category' => $_POST['income_category'],
            'income_date' => $_POST['income_date']
        ]);
    
        if ($sql_insert) {
            Header("Location:../income_add.php?durum=yes");
            exit;
        }
    } catch (PDOException $e) {
        // PDO hatalarını yakalar
        $errorCode = $e->getCode();
        if ($errorCode == "42S02") {
            // Tablo bulunamadığında
            Header("Location:../income_add.php?durum=no&error=table_not_found");
            exit;
        } else {
            // Diğer PDO hataları için
            Header("Location:../income_add.php?durum=no&error=" . urlencode($e->getMessage()));
            exit;
        }
    }
}


//expense_add işlem kısmı
if (isset($_POST['expense_add'])) {
    try {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    
        $sql_expense = $db->prepare("INSERT INTO expense SET
            expense_money = :expense_money,
            expense_category = :expense_category,
            expense_date = :expense_date
        ");
    
        $sql_insert = $sql_expense->execute([
            'expense_money' => $_POST['expense_money'],
            'expense_category' => $_POST['expense_category'],
            'expense_date' => $_POST['expense_date']
        ]);
    
        if ($sql_insert) {
            Header("Location:../expense_add.php?durum=yes");
            exit;
        }
    } catch (PDOException $e) {
        // PDO hatalarını yakalar
        $errorCode = $e->getCode();
        if ($errorCode == "42S02") {
            // Tablo bulunamadığında
            Header("Location:../expense_add.php?durum=no&error=table_not_found");
            exit;
        } else {
            // Diğer PDO hataları için
            Header("Location:../expense_add.php?durum=no&error=" . urlencode($e->getMessage()));
            exit;
        }
    }
    
}

?>
