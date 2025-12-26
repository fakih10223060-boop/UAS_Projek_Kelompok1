<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>
<p class="font-medium text-sm"><?= $_SESSION['admin']; ?></p>
<p class="text-xs text-blue-200">
    <?= $_SESSION['email'] ?? 'admin@aksinyata.id'; ?>
</p>

<?php
$initial = strtoupper(substr($_SESSION['admin'], 0, 2));
?>
<span class="text-sm font-bold"><?= $initial; ?></span>

<p class="font-semibold text-sm"><?= $_SESSION['admin']; ?></p>
<p class="text-xs text-gray-500">
    <?= $_SESSION['email'] ?? 'admin@aksinyata.id'; ?>
</p>