$(document).ready(function() {
  console.log("hai");
  $('#btn-download').click(function(){
    console.log("hai");
    html2canvas($('.main'), {
      onrendered: function(canvas) {
        var pdf = new jsPDF('a', 'mm', 'a4');

        var imgData = canvas.toDataURL('image/png', 0.0);
        pdf.addImage(imgData, 'PNG', 0, 0, 210, 300);

        pdf.save("e-tiket.pdf");
      }
    });
  });
});
