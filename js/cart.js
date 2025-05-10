document.addEventListener("DOMContentLoaded", () => {
    const forms = document.querySelectorAll(".add-to-cart-form");

    forms.forEach(form => {
        form.addEventListener("submit", async (e) => {
            e.preventDefault(); // Не отправлять форму по-обычному
            const formData = new FormData(form);

            await fetch("/MOTO/lib/add_to_cart.php", {
                method: "POST",
                body: formData
            });

            alert("Towar dodano do koszyka!");
        });
    });
});
