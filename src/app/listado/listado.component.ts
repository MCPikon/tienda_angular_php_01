import { Component, OnInit } from '@angular/core';
import { Videojuego } from '../modelos/Videojuego';
import { VideojuegosService } from '../videojuegos.service';

@Component({
  selector: 'app-listado',
  templateUrl: './listado.component.html',
  styleUrls: ['./listado.component.css']
})
export class ListadoComponent implements OnInit {

  info:Videojuego[] = {} as Videojuego[];

  constructor(private servicio:VideojuegosService) { }

  ngOnInit() {
    this.servicio.obtenerDatos().subscribe(res => this.info = res);
  }

}
