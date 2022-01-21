import { Component, OnInit } from '@angular/core';
import { Videojuego } from '../models/Videojuego';
import { VideojuegosService } from '../videojuegos.service';

@Component({
  selector: 'app-listado',
  templateUrl: './listado.component.html',
  styleUrls: ['./listado.component.css']
})
export class ListadoComponent implements OnInit {

  info:Videojuego[] = {} as Videojuego[];

  constructor(private servicio:VideojuegosService) { }

  ngOnInit(): void {
    this.servicio.obtenerDatos().subscribe(res => this.info = res);
  }

  verDetalles(v:Videojuego) {
    alert("indicar al componente padre que oculte el " + 
    "componente listado y muestre el componente ver detalles" +
     "para el videojuego: " + v.titulo);
  }

}
