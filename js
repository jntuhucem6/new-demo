import org.openqa.selenium.By;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;

public class new2 {

	public static void main(String[] args) {
		

ChromeDriver driver=new ChromeDriver();
try {
	driver.get("C://Users//Sony//OneDrive//Desktop//dev//js.html");
	WebElement button=driver.findElement(By.tagName("button"));
	button.click();
	driver.switchTo().alert().accept();
	System.out.println("test passed!");
}
catch(Exception e) {
	e.printStackTrace();
	System.out.println("test failed!");
	
}
finally {
	
}
	}

}



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0 ">
<title>Test page</title>
<script>
function showAlert(){
alert('Button WAS CLICKED!');
}
</script>
</head>
<body>
<h1>Hello,Selenium!</h1>
<button onclick ="showAlert()">Click me</button>
</body>
</html> 

