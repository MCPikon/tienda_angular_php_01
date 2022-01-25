import { Component, OnInit } from '@angular/core';
import { VideojuegoCarrito } from '../models/VideojuegoCarrito';
import { VideojuegosService } from '../videojuegos.service';

@Component({
  selector: 'app-carrito',
  templateUrl: './carrito.component.html',
  styleUrls: ['./carrito.component.css']
})
export class CarritoComponent implements OnInit {

  videojuegosCarrito:VideojuegoCarrito[] = {} as VideojuegoCarrito[];
  
  constructor(private servicioVideojuegos:VideojuegosService) { }

  ngOnInit(): void {
    this.listarVideojuegosCarrito();
  }

  listarVideojuegosCarrito() {
    this.servicioVideojuegos.obtenerVideojuegosCarrito().subscribe(res => this.videojuegosCarrito = res);
  }

  vaciarCarrito() {
    alert("de momento, cierra y abre navegador");
  }

}
