import { Component, EventEmitter, OnInit, Output } from '@angular/core';
import { Videojuego } from '../models/Videojuego';
import { VideojuegosService } from '../videojuegos.service';

@Component({
  selector: 'app-listado',
  templateUrl: './listado.component.html',
  styleUrls: ['./listado.component.css']
})
export class ListadoComponent implements OnInit {

  @Output() emisor_de_evento = new EventEmitter();

  info:Videojuego[] = {} as Videojuego[];

  constructor(private servicio:VideojuegosService) { }

  ngOnInit(): void {
    this.servicio.obtenerDatos().subscribe(res => this.info = res);
  }

  verDetalles(v:Videojuego) {
    this.emisor_de_evento.emit(v);
  }

}
