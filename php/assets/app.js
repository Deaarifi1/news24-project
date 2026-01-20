async function j(url, data) {
  const res = await fetch(url, data ? {
    method: "POST",
    headers: {"Content-Type":"application/json"},
    body: JSON.stringify(data)
  } : {});
  return res.json();
}

document.getElementById("readBtn")?.addEventListener("click", async () => {
  document.getElementById("out1").textContent = JSON.stringify(await j("php/ajax/read.php"), null, 2);
});
document.getElementById("updateBtn")?.addEventListener("click", async () => {
  document.getElementById("out1").textContent = JSON.stringify(await j("php/ajax/update.php", {value: "Hello from AJAX"}), null, 2);
});
document.getElementById("dbReadBtn")?.addEventListener("click", async () => {
  document.getElementById("out2").textContent = JSON.stringify(await j("php/ajax/db_read.php"), null, 2);
});
document.getElementById("dbUpdateBtn")?.addEventListener("click", async () => {
  document.getElementById("out2").textContent = JSON.stringify(await j("php/ajax/db_update.php"), null, 2);
});
