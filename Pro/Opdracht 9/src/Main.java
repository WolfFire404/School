import javafx.application.Application;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.stage.Stage;


public class Main extends Application {

    public void start(Stage stage) {
        Group rootNode = new Group();
        Scene scene = new Scene(rootNode, 200, 200);
        stage.setScene(scene);

        Label label = new Label("Hello World!");
        rootNode.getChildren().add(label);

        stage.setTitle("Hello World");
        stage.setScene(scene);
        stage.show();
    }
}

