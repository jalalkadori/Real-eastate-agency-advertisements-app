const BttSupprimerCarte = document.querySelectorAll(".supprimerCarteId");
BttSupprimerCarte.forEach((BttSupprimerCarte) => {
  BttSupprimerCarte.onclick = () => {
    const stockindex = BttSupprimerCarte.value;
    document.getElementById("idinp").value = stockindex;
  };
});

const BttModifierCarte = document.querySelectorAll(".modifierCarteId");
BttModifierCarte.forEach((BttModifierCarte) => {
  BttModifierCarte.onclick = () => {
    const stockindexM = BttModifierCarte.value;
    document.getElementById("idinpMd").value = stockindexM;
  };
});
