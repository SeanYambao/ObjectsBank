<?php
include 'classes/Account.php';
include 'classes/Customer.php';
include 'includes/header.php';

$accounts = [
    new Account("2052278", "Savings", 15000),
    new Account("2035123", "Checking", -2500),
    new Account("2085342", "Payroll", 22000),
    new Account("2024123", "Emergency", -1000)
];

$customer = new Customer("Sean", "Yambao", $accounts);
?>

<h2><?= $customer->getFullName(); ?>'s Accounts</h2>

<table>
    <tr>
        <th>Account Number</th>
        <th>Account Type</th>
        <th>Balance</th>
    </tr>

    <?php foreach ($customer->accounts as $account): ?>
        <tr>
            <td><?= $account->accountNumber; ?></td>
            <td><?= $account->type; ?></td>

            <?php if ($account->balance >= 0): ?>
                <td>₱<?= number_format($account->balance, 2); ?></td>
            <?php else: ?>
                <td class="overdrawn">
                    ₱<?= number_format($account->balance, 2); ?>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>

<?php include 'includes/footer.php'; ?>
