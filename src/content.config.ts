import { defineCollection, z } from 'astro:content';
import { glob } from 'astro/loaders';

const blogCollection = defineCollection({
  loader: glob({ pattern: '**/[^_]*.md', base: "./src/content/blog" }),
  schema: z.object({
    title: z.string(),
    excerpt: z.string(),
    date: z.coerce.date(),
    author: z.string(),
    category: z.string(),
    coverImage: z.string(),
    readTime: z.string(),
    tags: z.array(z.string()).optional(),
    draft: z.boolean().optional().default(false),
  })
});

const servicesCollection = defineCollection({
  loader: glob({ pattern: '**/[^_]*.md', base: "./src/content/services" }),
  schema: z.object({
    title: z.string(),
    excerpt: z.string(),
    icon: z.string(),
    order: z.number().optional().default(0),
    headline: z.string(),
    features: z.array(z.string()),
    process: z.array(z.string()),
    faqs: z.array(z.object({
      question: z.string(),
      answer: z.string()
    })),
    whoItFor: z.string()
  })
});

export const collections = {
  'blog': blogCollection,
  'services': servicesCollection,
};
