import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { Videojuego } from './models/Videojuego';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

  constructor(private router:Router) { }

  ngOnInit():void {
    this.router.navigate(["/listado"]);
  }

  /* cuando no había routing:
  mostrar_listado = true;
  mostrar_detalles = false;
  mostrar_carrito = false;

  videojuego_en_detalle:Videojuego = {} as Videojuego;

  ocultar_componentes() {
    this.mostrar_listado = false;
    this.mostrar_detalles = false;
    this.mostrar_carrito = false;
  }

  mostrar_listado_videojuegos() {
    this.ocultar_componentes();
    this.mostrar_listado = true;
  }

  mostrar_detalles_videojuego(v:Videojuego) {
    alert("mostrar detalles para el libro: " + v.titulo);
    this.videojuego_en_detalle = v;
    this.ocultar_componentes();
    this.mostrar_detalles = true;
  }

  mostrar_carrito_videojuegos() {
    this.ocultar_componentes();
    this.mostrar_carrito = true;
  } */

}
