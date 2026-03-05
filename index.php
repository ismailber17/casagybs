<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>طلب التوصيل</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        form { max-width: 500px; margin: auto; }
        input, textarea, select { width: 100%; margin: 10px 0; padding: 8px; }
        button { padding: 10px 20px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background: #45a049; }
    </style>
</head>
<body>
    <h2>نموذج طلب التوصيل</h2>
    <form action="create.php" method="POST">
        <input type="text" name="customer_name" placeholder="اسم العميل" required>
        <input type="text" name="phone" placeholder="رقم الهاتف" required>
        <select name="wilaya" required>
            <option value="">اختر الولاية</option>
            <option value="Algiers">الجزائر</option>
            <option value="Oran">وهران</option>
            <!-- أضف باقي الولايات حسب الحاجة -->
        </select>
        <input type="text" name="commune" placeholder="البلدية" required>
        <input type="text" name="address" placeholder="العنوان" required>
        <input type="number" name="price" placeholder="المبلغ" required>
        <textarea name="note" placeholder="ملاحظة"></textarea>
        <button type="submit">إرسال الطلب</button>
    </form>
</body>
</html>








