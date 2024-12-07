import { Component, Input, OnInit } from '@angular/core';
import { GitHubRepository } from '../../../../services/GitHubAPIService/models/GitHubRepository';
import { CommonModule } from '@angular/common';

@Component({
	selector: 'repository-card',
	standalone: true,
	imports: [CommonModule],
	templateUrl: './repository-card.component.html',
	styleUrl: './repository-card.component.scss',
})
export class RepositoryCardComponent {
	@Input() repository!: GitHubRepository;
}
