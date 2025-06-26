
<!DOCTYPE html>
<html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Add Car</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="p-4">
<h3>Add Car</h3>
<form method="post" class="row g-3">
  <div class="col-md-4"><label class="form-label">Brand</label><input name="brand" class="form-control" required></div>
  <div class="col-md-4"><label class="form-label">Model</label><input name="model" class="form-control" required></div>
  <div class="col-md-4"><label class="form-label">Price/Day (RM)</label><input type="number" step="0.01" name="price_per_day" class="form-control" required></div>
  <div class="col-md-2"><label class="form-label">Seats</label><input type="number" name="seats" class="form-control" value="4" required></div>
  <div class="col-md-3"><label class="form-label">Fuel Type</label><input name="fuel_type" class="form-control" required></div>
  <div class="col-md-3"><label class="form-label">Status</label>
    <select name="status" class="form-select">
      <option value="available">Available</option>
      <option value="maintenance">Maintenance</option>
      <option value="unavailable">Unavailable</option>
    </select>
  </div>
  <div class="col-12"><button class="btn btn-primary">Save</button> <a href="cars.php" class="btn btn-secondary">Cancel</a></div>
</form>
</body></html>
