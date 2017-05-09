package sample;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Group;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.input.MouseEvent;
import javafx.scene.paint.Color;
import javafx.scene.shape.Rectangle;
import javafx.stage.Stage;
public class Main extends Application {

    @Override
    public void start(Stage stage) throws Exception{
            Group rootNode = new Group();
        Scene scene = new Scene(rootNode, 800, 600);

        stage.setScene(scene);


        Rectangle r = new Rectangle();
        r.setFill(Color.BLUE);
        r.relocate(50,100);
        r.setWidth(100);
        r.setHeight(100);
        rootNode.getChildren().add(r);

        Rectangle c = new Rectangle();
        c.setFill(Color.RED);
        c.relocate(200,100);
        c.setWidth(100);
        c.setHeight(100);
        rootNode.getChildren().add(c);

        Rectangle g = new Rectangle();
        g.setFill(Color.BLACK);
        g.relocate(350,100);
        g.setWidth(100);
        g.setHeight(100);
        rootNode.getChildren().add(g);

        Rectangle t = new Rectangle();
        t.setFill(Color.MAGENTA);
        t.relocate(500,100);
        t.setWidth(100);
        t.setHeight(100);
        rootNode.getChildren().add(t);

        Button links = new Button("Links");
        links.relocate(50,50);
        rootNode.getChildren().add(links);

        Button rechts = new Button("Rechts");
        rechts.relocate(110,50);
        rootNode.getChildren().add(rechts);

        Button groter = new Button("Groter");
        groter.relocate(180,50);
        rootNode.getChildren().add(groter);

        Button kleiner = new Button("Kleiner");
        kleiner.relocate(250,50);
        rootNode.getChildren().add(kleiner);


        stage.setTitle("boiiii");
        stage.setScene(scene);
        stage.show();

        groter.addEventHandler(MouseEvent.MOUSE_CLICKED, (MouseEvent m) -> {
            t.setScaleX(t.getScaleX() + 0.1);
            t.setScaleY(t.getScaleY() + 0.1);
            g.setScaleX(g.getScaleX() + 0.1);
            g.setScaleY(g.getScaleY() + 0.1);
            c.setScaleX(c.getScaleX() + 0.1);
            c.setScaleY(c.getScaleY() + 0.1);
            r.setScaleX(r.getScaleX() + 0.1);
            r.setScaleY(r.getScaleY() + 0.1);

        });

        kleiner.addEventHandler(MouseEvent.MOUSE_CLICKED, (MouseEvent m) -> {
            t.setScaleX(t.getScaleX() - 0.1);
            t.setScaleY(t.getScaleY() - 0.1);
            g.setScaleX(g.getScaleX() - 0.1);
            g.setScaleY(g.getScaleY() - 0.1);
            c.setScaleX(c.getScaleX() - 0.1);
            c.setScaleY(c.getScaleY() - 0.1);
            r.setScaleX(r.getScaleX() - 0.1);
            r.setScaleY(r.getScaleY() - 0.1);

        });

        links.addEventHandler(MouseEvent.MOUSE_CLICKED, (MouseEvent m) -> {
        t.setRotate(t.getRotate() - 5);
        g.setRotate(g.getRotate() - 5);
        c.setRotate(c.getRotate() - 5);
        r.setRotate(r.getRotate() - 5);
        });

        rechts.addEventHandler(MouseEvent.MOUSE_CLICKED, (MouseEvent m) -> {
            t.setRotate(t.getRotate() + 5);
            g.setRotate(g.getRotate() + 5);
            c.setRotate(c.getRotate() + 5);
            r.setRotate(r.getRotate() + 5);
        });
    }





    public static void main(String[] args) {
        launch(args);
    }
}
