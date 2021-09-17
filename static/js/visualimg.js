const prevIMG = () => {
  const selecFile = document.getElementById("input-:file1");
  const visualizationImg = document.getElementById("visualizationIMG");
  const plusIcon = document.getElementById("plusIcon");
  selecFile.addEventListener("change", () => {
    plusIcon.style.display = "none";
    visualizationImg.style.width = "15rem";
    visualizationImg.style.height = "15rem";
    visualizationImg.style.borderRadius = "3rem";
    const file = selecFile.files;
    const oneFile = file[0];
    const objectURL = URL.createObjectURL(oneFile);
    visualizationImg.src = objectURL;

  });
};
prevIMG();