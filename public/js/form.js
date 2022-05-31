const pertanyaan_satu = document.getElementById("what_study_program");
const pertanyaan_dua = document.getElementById("college_entry_date");
const pertanyaan_tiga = document.getElementById("college_graduation_date");
const pertanyaan_empat = document.getElementById("score_ipk");
const pertanyaan_lima = document.getElementById("organization");
const pertanyaan_enam = document.getElementById("active_inactive_organization");
const pertanyaan_tujuh = document.getElementById("further_education_levels");
const pertanyaan_delapan = document.getElementById("educational_background");
const pertanyaan_sebilan = document.getElementById("field_work");
const pertanyaan_sepuluh = document.getElementById("according");

form.addEventListener("keyup", (e) => {
    const value = e.currentTarget.value;
    submitButton.disabled = false;

    if (name.value === "" || name.value == null)
        submitButton.disabled = true;

    if (place.value === "" || place.value == null)
        submitButton.disabled = true;

    if (date.value === "" || date.value == null)
        submitButton.disabled = true;

    if (gender.value === "" || gender.value == null)
        submitButton.disabled = true;

    if (phone.value === "" || phone.value == null)
        submitButton.disabled = true;

    if (email.value === "" || email.value == null)
        submitButton.disabled = true;

    if (pertanyaan_satu.value === "" || pertanyaan_satu.value == null)
        next.disabled = true;

    if (pertanyaan_dua.value === "" || pertanyaan_dua.value == null)
        next.disabled = true;

    if (pertanyaan_tiga.value === "" || pertanyaan_tiga.value == null)
        next.disabled = true;

    if (pertanyaan_empat.value === "" || pertanyaan_empat.value == null)
        next.disabled = true;

    if (pertanyaan_lima.value === "" || pertanyaan_lima.value == null)
        next.disabled = true;

    if (pertanyaan_enam.value === "" || pertanyaan_enam.value == null)
        next.disabled = true;

    if (pertanyaan_tujuh.value === "" || pertanyaan_tujuh.value == null)
        next.disabled = true;

    if (pertanyaan_delapan.value === "" || pertanyaan_delapan.value == null)
        next.disabled = true;

    if (pertanyaan_sebilan.value === "" || pertanyaan_sebilan.value == null)
        next.disabled = true;

    if (pertanyaan_sepuluh.value === "" || pertanyaan_sepuluh.value == null)
        next.disabled = true;
});