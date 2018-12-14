function submitQuery() {
    request(
        "queryES",
        {"textQuery": $("#query").val()}
    )
}

function request(functionName,data)
{
    $.post(
        "indexFunctions.php",
        {
            "func": functionName,
            "data": data
        }
    ).done(function(data) {
        console.log(data);
        alert(data)
    })
    .fail(function(data) {
        console.log(data)
        alert("ERROR" +
            "\nStatus code = " + data.status +
            "\nStatus text = " + data.statusText
        )
    })
}