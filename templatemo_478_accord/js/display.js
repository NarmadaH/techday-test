/**
 * Created by Achini on 11/1/2016.
 */

function slideTransition() {
    var obj;
    alert('here');

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        obj.onreadystatechange = function () {
            if (obj.readyState < 4) {
                // progress
            } else if (obj.readyState === 4) {
                var res = obj.responseText;
                var result = JSON.parse(res);
                alert(res);

                var i = 0;

                function myLoop() {
                    setTimeout(function () {
                        alert('hello');

                        document.getElementById('first-name').innerHTML = result[i].first_name;
                        document.getElementById('last-name').innerHTML = result[i].last_name;
                        document.getElementById('designation').innerHTML = result[i].designation;

                        i++;
                        if (i < 10 && i<result.length) {
                            alert(i+ " going on...");
                            myLoop();
                        }
                    }, 3000)
                }

                myLoop();


            }
        }

        obj.open("GET", "controller/displayController.php?", true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        obj.send();
    }
}

