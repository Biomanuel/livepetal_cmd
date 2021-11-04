import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: "Basic Widget",
      home: Scaffold(
        body: Center(
          child: Container(
            color: Colors.blue,
            height: 100,
            width: 100,
            child: const Center(child: Text("Google")),
          ),
        ),
      ),
    );
  }
}
