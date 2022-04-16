function blockButton()
{
    let textBox = document.getElementById("textBox").value;

    document.getElementById("sendForm").disabled = textBox.length == 0;
}
