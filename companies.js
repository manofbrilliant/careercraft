// Function to automatically increment S.No
function addRowNumbers() {
    const table = document.getElementById("companyTable");
    const rows = table.querySelectorAll("tbody tr");

    // Remove prevention of dragging and text selection on rows and cells
    rows.forEach((row, index) => {
        row.querySelector("td").innerHTML = index + 1; // Set S.No
    });
}

// Function to filter the table based on search input
function filterTable() {
    const input = document.getElementById("searchInput");
    const filter = input.value.toLowerCase();
    const table = document.getElementById("companyTable");
    const rows = table.querySelectorAll("tr");
    let noData = true;

    for (let i = 1; i < rows.length; i++) {
        const cells = rows[i].querySelectorAll("td");
        const [tdCompany, tdState, tdCity, tdField] = [cells[1], cells[2], cells[3], cells[4]];

        if (tdCompany || tdState || tdCity || tdField) {
            const texts = [tdCompany, tdState, tdCity, tdField].map(cell => cell.textContent.toLowerCase());
            const isVisible = texts.some(text => text.includes(filter));
            rows[i].style.display = isVisible ? "" : "none";
            noData = !isVisible && noData;
        }
    }

    document.getElementById("noData").style.display = noData ? "block" : "none";
    addRowNumbers(); // Update row numbers after filtering
}

// Automatically add row numbers on page load
document.addEventListener("DOMContentLoaded", () => {
    addRowNumbers();
});
