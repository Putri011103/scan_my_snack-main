<?php
include 'db.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action']; // 'update' atau 'delete'

    if ($action === 'update') {
        $id = (int)$_POST['id'];
        $name = $_POST['name'];
        $sugar = (float)$_POST['sugar'];
        $fat = (float)$_POST['fat'];
        $calories = (float)$_POST['calories'];

        // Evaluasi ulang snack
        $evaluation = evaluateSnack($sugar, $fat, $calories);

        // Update data snack
        $stmt = $conn->prepare("UPDATE snacks SET name = ?, sugar = ?, fat = ?, calories = ?, evaluation = ? WHERE id = ?");
        $stmt->bind_param("sdddsi", $name, $sugar, $fat, $calories, $evaluation, $id);

        if ($stmt->execute()) {
            $response = ["status" => "success", "message" => "Data berhasil diperbarui"];
        } else {
            $response = ["status" => "error", "message" => "Gagal memperbarui data: " . $stmt->error];
        }
        $stmt->close();

    } elseif ($action === 'delete') {
        $id = (int)$_POST['id'];

        // Hapus data snack
        $stmt = $conn->prepare("DELETE FROM snacks WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            $response = ["status" => "success", "message" => "Data berhasil dihapus"];
        } else {
            $response = ["status" => "error", "message" => "Gagal menghapus data: " . $stmt->error];
        }
        $stmt->close();

    } else {
        $response = ["status" => "error", "message" => "Aksi tidak valid"];
    }


    header('Location: about.php');
    echo json_encode($response);
    exit;
}

// Fungsi evaluasi snack
function evaluateSnack($sugar, $fat, $calories) {
    if ($sugar > 20 || $fat > 15 || $calories > 500) {
        return "Tidak Sehat";
    } elseif ($sugar <= 5 && $fat <= 5 && $calories <= 200) {
        return "Sangat Sehat";
    } else {
        return "Cukup Sehat";
    }
}
?>
