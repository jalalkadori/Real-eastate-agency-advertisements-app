const BttSupprimerCarte = document.querySelectorAll(".supprimerCarteId");

BttSupprimerCarte.forEach((BttSupprimerCarte) => {
  BttSupprimerCarte.onclick = () => {
    const stockindex = BttSupprimerCarte.value;
    document.getElementById("idinp").value = stockindex;
  };
});
